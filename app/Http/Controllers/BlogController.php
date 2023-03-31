<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Flash;
use Response;

class BlogController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);

        return view('blogs.index')
            ->with('blogs', $blogs);
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
            'slug' => 'required|unique:blog'
          ]); 
      
          if($request->hasfile('imageFile')) {
              foreach($request->file('imageFile') as $file)
              {
                    $file_extension = $file->getClientOriginalExtension();
                    $name = time().'.'.$file_extension;
                    $file->move(public_path().'/images/', $name);  
                    $imgData[] = $name;  
              }
              $input['image'] = json_encode($imgData);
          }

        $blog = $this->blogRepository->create($input);

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param int $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $blog = $this->blogRepository->find($id);

        $request->validate([
            'slug' => 'required|unique:blog,slug,'.$id,
        ]);
      
        if($request->hasfile('imageFile')) {
            $request->validate([
                'imageFile' => 'required',
                'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',            
                ]);

            foreach(json_decode($blog->image, true) as $images){
                $image_path = public_path().'/images/'.$images;
                    if(file_exists($image_path)){
                        unlink($image_path);
                    }
                } 

            foreach($request->file('imageFile') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/', $name);  
                $imgData[] = $name;  
            }   
    
            $request['image'] = json_encode($imgData);
                  
        }

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog = $this->blogRepository->update($request->all(), $id);

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->find($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        foreach(json_decode($blog->image, true) as $images){
        $image_path = public_path().'/images/'.$images;
            if(file_exists($image_path)){
                unlink($image_path);
            }
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
