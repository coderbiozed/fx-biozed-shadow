<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrokerReviewRequest;
use App\Http\Requests\UpdateBrokerReviewRequest;
use App\Repositories\BrokerReviewRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\BrokerReview;
use Flash;
use Response;
use DB;

class BrokerReviewController extends AppBaseController
{
    /** @var  BrokerReviewRepository */
    private $brokerReviewRepository;

    public function __construct(BrokerReviewRepository $brokerReviewRepo)
    {
        $this->brokerReviewRepository = $brokerReviewRepo;
    }

    /**
     * Display a listing of the BrokerReview.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $brokerReviews = BrokerReview::orderBy('id', 'desc')->paginate(10);
        $featuredBrokers = DB::table('broker_review')->Where('featured_broker',  1)->get();
        $high_leverage_brokers = DB::table('broker_review')->Where('high_leverage',  1)->get();
        $australian_brokers = DB::table('broker_review')->Where('australian_broker',  1)->get();
        $asian_brokers = DB::table('broker_review')->Where('asian_broker',  1)->get();
        $australian_brokers = DB::table('broker_review')->Where('australian_broker',  1)->get();
        $african_brokers = DB::table('broker_review')->Where('african_broker',  1)->get();
        $canadian_brokers = DB::table('broker_review')->Where('canadian_broker',  1)->get();
        $europian_brokers = DB::table('broker_review')->Where('europian_broker',  1)->get();
        $middle_east_broker = DB::table('broker_review')->Where('middle_east_broker',  1)->get();
        $us_brokers = DB::table('broker_review')->Where('us_broker',  1)->get();
        $uk_broker = DB::table('broker_review')->Where('uk_broker',  1)->get();
        $trading_platform_reviews = DB::table('broker_review')->Where('trading_platform_review',  1)->get();
        $top_brokers = DB::table('broker_review')->whereNotNull('top_broker')->orderBy('top_broker', 'ASC')->get();

        return view('broker_reviews.index')
            ->with('brokerReviews', $brokerReviews)
            ->with('featuredBrokers', $featuredBrokers)
            ->with('high_leverage_brokers', $high_leverage_brokers)
            ->with('asian_brokers', $asian_brokers)
            ->with('australian_brokers', $australian_brokers)
            ->with('african_brokers', $african_brokers)
            ->with('canadian_brokers', $canadian_brokers)
            ->with('europian_brokers', $europian_brokers)
            ->with('middle_east_broker', $middle_east_broker)
            ->with('us_brokers', $us_brokers)
            ->with('uk_broker', $uk_broker)
            ->with('trading_platform_reviews', $trading_platform_reviews)
            ->with('top_brokers', $top_brokers);
    }

    /**
     * Show the form for creating a new BrokerReview.
     *
     * @return Response
     */
    public function create()
    {
        return view('broker_reviews.create');
    }

    /**
     * Store a newly created BrokerReview in storage.
     *
     * @param CreateBrokerReviewRequest $request
     *
     * @return Response
     */
    public function store(CreateBrokerReviewRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'imageMain' => 'required',
                'imageMain.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
                'imageLogo' => 'required',
                'imageLogo.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048',
                'slug' => 'required|unique:broker_review'
          ]);
      
          if($request->hasfile('imageMain') && $request->hasfile('imageLogo')) {
              foreach($request->file('imageMain') as $file)
              {
                  $file_extension = $file->getClientOriginalExtension();
                  $name = time().'.'.$file_extension;
                  $file->move(public_path().'/images/', $name);  
                  $imgDataMain[] = $name;  
              }

              foreach($request->file('imageLogo') as $file)
              {
                  $file_extension = $file->getClientOriginalExtension();
                  $name = time().'.'.$file_extension;
                  $file->move(public_path().'/images/', $name);  
                  $imgDataLogo[] = $name;  
              }
      
        
              $input['main_image'] = json_encode($imgDataMain);
              $input['logo_image'] = json_encode($imgDataLogo);      
          }

        $brokerReview = $this->brokerReviewRepository->create($input);

        Flash::success('Broker Review saved successfully.');

        return redirect(route('brokerReviews.index'));
    }

    /**
     * Display the specified BrokerReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brokerReview = $this->brokerReviewRepository->find($id);

        if (empty($brokerReview)) {
            Flash::error('Broker Review not found');

            return redirect(route('brokerReviews.index'));
        }

        return view('broker_reviews.show')->with('brokerReview', $brokerReview);
    }

    /**
     * Show the form for editing the specified BrokerReview.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brokerReview = $this->brokerReviewRepository->find($id);

        if (empty($brokerReview)) {
            Flash::error('Broker Review not found');

            return redirect(route('brokerReviews.index'));
        }

        return view('broker_reviews.edit')->with('brokerReview', $brokerReview);
    }

    /**
     * Update the specified BrokerReview in storage.
     *
     * @param int $id
     * @param UpdateBrokerReviewRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBrokerReviewRequest $request)
    {
        $brokerReview = $this->brokerReviewRepository->find($id);

        $request->validate([
            'slug' => 'required|unique:broker_review,slug,'.$id,
        ]);
      


        if($request->hasfile('imageMain')){

            $request->validate([
                'imageMain' => 'required',
                'imageMain.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048'                    
                ]);
            foreach(json_decode($brokerReview->main_image, true) as $images){
            $image_path = public_path().'/images/'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }

            foreach($request->file('imageMain') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/', $name);  
                $imgDataMain[] = $name;  
            }

            $request['main_image'] = json_encode($imgDataMain);
        }

        if($request->hasfile('imageLogo')){

            $request->validate([
                'imageLogo' => 'required',
                'imageLogo.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,svg|max:2048'
                ]);

            foreach(json_decode($brokerReview->logo_image, true) as $images){
            $image_path = public_path().'/images/'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }

            foreach($request->file('imageLogo') as $file)
            {
                $file_extension = $file->getClientOriginalExtension();
                $name = time().'.'.$file_extension;
                $file->move(public_path().'/images/', $name);  
                $imgDataLogo[] = $name;  
            }
            $request['logo_image'] = json_encode($imgDataLogo); 
        }     
      

        if (empty($brokerReview)) {
            Flash::error('Broker Review not found');

            return redirect(route('brokerReviews.index'));
        }

        $brokerReview = $this->brokerReviewRepository->update($request->all(), $id);

        Flash::success('Broker Review updated successfully.');

        return redirect(route('brokerReviews.index'));
    }

    /**
     * Remove the specified BrokerReview from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brokerReview = $this->brokerReviewRepository->find($id);

        $compare = DB::table('compare')->Where('broker_id',  $id);
        $user_review = DB::table('user_review')->Where('broker_id',  $id);
        $faq = DB::table('faq')->Where('broker_id',  $id);

        if (empty($brokerReview)) {
            Flash::error('Broker Review not found');

            return redirect(route('brokerReviews.index'));
        }

        if(!empty($compare)){
            $compare->delete();
        }

        if(!empty($user_review)){
            $user_review->delete();
        }

        if(!empty($faq)){
            $faq->delete();
        }

        foreach(json_decode($brokerReview->main_image, true) as $images){
            $image_path = public_path().'/images/'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }

        foreach(json_decode($brokerReview->logo_image, true) as $images){
            $image_path = public_path().'/images/'.$images;
                if(file_exists($image_path)){
                    unlink($image_path);
                }
            }

        $this->brokerReviewRepository->delete($id);

        Flash::success('Broker Review deleted successfully.');

        return redirect(route('brokerReviews.index'));
    }
}
