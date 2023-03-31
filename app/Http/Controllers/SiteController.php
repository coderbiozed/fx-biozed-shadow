<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Blog;
use App\Models\BrokerReview;
use App\Models\UserReview;
use App\Repositories\UserReviewRepository;
use Mail;
use App\Mail\ContactMail;

class SiteController extends Controller
{
    public function index(Request $request)
    {   
        $blogs = DB::table('blog')->Where('publish',  1)->orderBy('id', 'asc')->whereNotIn('top',  [1])->whereNotIn('side',  [1])->take(4)->get();
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $side_blogs = DB::table('blog')->Where('publish',  1)->Where('side',  1)->orderBy('id', 'desc')->take(5)->get();
        $top_featured = DB::table('broker_review')->Where('featured_broker',  1)->Where('publish',  1)->Where('top_broker',  1)->first();
        $featured_brokers = DB::table('broker_review')->Where('featured_broker',  1)->Where('publish',  1)->take('10')->get();
        $autralian_brokers = DB::table('broker_review')->Where('australian_broker',  1)->Where('publish',  1)->take(4)->get();
        $asian_brokers =  DB::table('broker_review')->Where('asian_broker',  1)->Where('publish',  1)->take(4)->get();
        $african_brokers =  DB::table('broker_review')->Where('african_broker',  1)->Where('publish',  1)->take(4)->get();
        $canadian_brokers =  DB::table('broker_review')->Where('canadian_broker',  1)->Where('publish',  1)->take(4)->get();
        $europian_brokers =  DB::table('broker_review')->Where('europian_broker',  1)->Where('publish',  1)->take(4)->get();
        $middle_east_brokers =  DB::table('broker_review')->Where('middle_east_broker',  1)->Where('publish',  1)->take(7)->get();
        $us_brokers =  DB::table('broker_review')->Where('us_broker',  1)->Where('publish',  1)->take(4)->get();
        $uk_brokers =  DB::table('broker_review')->Where('uk_broker',  1)->Where('publish',  1)->take(4)->get();
        $trading_platform_reviews = DB::table('broker_review')->Where('trading_platform_review',  1)->Where('publish',  1)->take(4)->get();
        $user_reviews = DB::table('user_review')->orderBy('id', 'desc')->take(10)->get();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();
        $top_feature_banner = DB::table('banner')->Where('banner',  'Small Banner')->first();
        $top_traders= DB::table('traders')->orderBy('id', 'desc')->get();
        $excitingbonuses =DB::table('bonus')->orderBy('id', 'desc')->take(3)->get();
        $upcomingcontests= DB::table('contests')->orderBy('id', 'desc')->take(3)->get();
        $input1 = $request->all();
        $input2 = $request->all();
        $broker = DB::table('broker_review')->get();
        $all_brokers = DB::table('broker_review')->orderBy(DB::raw('ISNULL(top_broker), top_broker'), 'ASC')->get();
        $compare = DB::table('compare')->get();
        $compareFirst = DB::table('compare')->Where('slug',  $input1)->first();
        $compareWith = DB::table('compare')->Where('slug',  $input2)->first();
         
        return view('site.index')
            ->with('blogs', $blogs)
            ->with('top_banner', $top_banner)
            ->with('side_blogs', $side_blogs)
            ->with('top_featured', $top_featured)
            ->with('featured_brokers', $featured_brokers)
            ->with('asian_brokers', $asian_brokers)
            ->with('autralian_brokers', $autralian_brokers)
            ->with('african_brokers', $african_brokers)
            ->with('canadian_brokers', $canadian_brokers)
            ->with('europian_brokers', $europian_brokers)
            ->with('middle_east_brokers', $middle_east_brokers)
            ->with('us_brokers', $us_brokers)
            ->with('uk_brokers', $uk_brokers)
            ->with('trading_platform_reviews', $trading_platform_reviews)
            ->with('user_reviews', $user_reviews)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner)
            ->with('top_feature_banner', $top_feature_banner)
            ->with('top_traders', $top_traders)
            ->with('excitingbonuses', $excitingbonuses)
            ->with('upcomingcontests', $upcomingcontests)
            ->with('broker', $broker)
            ->with('compare', $compare)
            ->with('compareWith', $compareWith)
            ->with('compareFirst', $compareFirst)         
            ->with('all_brokers', $all_brokers);
    }

    public function brokerReviews()
    {
        $asian_brokers =  DB::table('broker_review')->Where('australian_broker',  0)->Where('publish',  1)->take(4)->get();
        $autralian_brokers = DB::table('broker_review')->Where('australian_broker',  1)->Where('publish',  1)->take(4)->get();
        $all_brokers = DB::table('broker_review')->orderBy(DB::raw('ISNULL(top_broker), top_broker'), 'ASC')->get();
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();
        return view('site.broker_reviews')
            ->with('all_brokers', $all_brokers)
            ->with('autralian_brokers', $autralian_brokers)
            ->with('top_banner', $top_banner)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner)
            ->with('asian_brokers', $asian_brokers);
    }

    public function asianBroker()
    {
        $asian_brokers =  DB::table('broker_review')->Where('asian_broker',  1)->Where('publish',  1)->take(10)->get();
        return view('site.asian_broker')
        ->with('asian_brokers', $asian_brokers);
    }


    public function australianBroker()
    {
        $australian_brokers =  DB::table('broker_review')->Where('australian_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.australian_broker')
        ->with('australian_brokers', $australian_brokers);
    }


    public function africanBroker()
    {
        $african_brokers =  DB::table('broker_review')->Where('african_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.african_broker')
        ->with('african_brokers', $african_brokers);
    }


    public function canadianBroker()
    {
        $canadian_brokers =  DB::table('broker_review')->Where('canadian_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.canadian_broker')
        ->with('canadian_brokers', $canadian_brokers);
    }


    public function europianBroker()
    {
        $europian_brokers =  DB::table('broker_review')->Where('europian_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.europian_broker')
        ->with('europian_brokers', $europian_brokers);
    }


    public function middleEastBroker()
    {
        $middle_east_brokers =  DB::table('broker_review')->Where('middle_east_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.middle_east_broker')
        ->with('middle_east_brokers', $middle_east_brokers);
    }

    public function usBroker()
    {
        $us_brokers =  DB::table('broker_review')->Where('us_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.us_broker')
        ->with('us_brokers', $us_brokers);
    }


    public function ukBroker()
    {
        $uk_brokers =  DB::table('broker_review')->Where('uk_broker',  1)->Where('publish',  1)->take(4)->get();
        return view('site.uk_broker')
        ->with('uk_brokers', $uk_brokers);
    }


    public function allBlogs()
    {
        $blogs = DB::table('blog')->Where('publish',  1)->orderBy('id', 'desc')->paginate(9);
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();
        return view('site.blog')
            ->with('blogs', $blogs)
            ->with('top_banner', $top_banner)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner);
    }

    public function blogDetails($slug)
    {
        $blog_details = DB::table('blog')->Where('slug',  $slug)->first();
        $next = Blog::where('id', '<', $blog_details->id)->max('slug');
        $previous_blog = Blog::where('id', '>', $blog_details->id)->orderBy('id', 'asc')->first();
        $previous = isset($previous_blog['slug']) ? $previous_blog['slug'] :'';
        $featured_brokers = DB::table('broker_review')->Where('featured_broker',  1)->Where('publish',  1)->take(3)->get();
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();

        return view('site.blog_details')
            ->with('blog', $blog_details)
            ->with('featured_brokers', $featured_brokers)
            ->with('previous', $previous)
            ->with('next', $next)
            ->with('top_banner', $top_banner)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner);
    }

    public function awards()
    {
        return view('site.awards');
    }

    public function about()
    {
        $subscribers= DB::table('subscriber')->get();
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();

        return view('site.about')
            ->with('top_banner', $top_banner)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner)
            ->with('subscribers', $subscribers);
    }

    public function contact()
    {
        $top_banner = DB::table('banner')->Where('banner',  'Top Banner')->first();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();

        return view('site.contact')
            ->with('top_banner', $top_banner)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner);
    }

    public function compare(Request $request)
    {



       
        $input1 = $request->post('compareFirst');
        $input2= $request->post('compareWith');


        $compareFirst = DB::table('compare')->Where('id',  $input1)->first();
       
        $compareWith = DB::table('compare')->Where('id',  $input2)->first();

       
        return view('site.compare')
            ->with('compareFirst', $compareFirst)
            ->with('compareWith', $compareWith);
          
          
    }

    public function brokerReview($slug)
    {
        $brokerDetails = DB::table('broker_review')->Where('slug',  $slug)->first();
        $all_brokers = DB::table('compare')->get();
        $user_review = DB::table('user_review')->Where('broker_id',  $brokerDetails->id)->avg('rating');
        $user_reviews = DB::table('user_review')->Where('broker_id',  $brokerDetails->id)->get();
        // $user_reviews = DB::table('user_review')->orderBy('id', 'desc')->get();
        $left_banner = DB::table('banner')->Where('banner',  'Left Banner')->first();
        $right_banner = DB::table('banner')->Where('banner',  'Right Banner')->first();
        $faq = DB::table('faq')->Where('broker_id',  $brokerDetails->id)->first();
        if (empty($faq)) {
            $faq = DB::table('faq')->whereNull('broker_id')->first();
        }

        return view('site.broker_review_details')
            ->with('broker', $brokerDetails)
            ->with('all_brokers', $all_brokers)
            ->with('user_review', $user_review)
            ->with('user_reviews', $user_reviews)
            ->with('left_banner', $left_banner)
            ->with('right_banner', $right_banner)
            ->with('faq', $faq);
    }


    // bonuses👍🎉🎈
    public function depositBonuses()
    {
        // ->orderBy('id', 'desc')->take(5)
        $dipositeBonus = DB::table('bonus')->Where('publish',  1)->Where('deposit_bonus',  1)->get();
        
        $brokerReviews = BrokerReview::pluck('id', 'logo_image');
     
        return view('site.deposit_bonuses')
            ->with('deposit_bonus', $dipositeBonus)
            ->with('brokerReviews', $brokerReviews);      
    }


    public function welcomeBonuses()
    {
        $welcomeBonus = DB::table('bonus')->Where('publish',  1)->Where('welcome_bonus',  1)->get();
       
        $brokerReviews = BrokerReview::pluck('id', 'logo_image');

        $rating = UserReview::pluck('id', 'rating');
       
        return view('site.welcome_bonuses')
        ->with('welcome_bonus', $welcomeBonus)
        ->with('brokerReviews', $brokerReviews)
        ->with('rating', $rating);
    }

    public function depositBonusesDetails($id)
    {    
       
        $depositBonus = DB::table('bonus')->Where('publish',  1)->Where('deposit_bonus',  1)->Where('id',  $id)->get();
        
        return view('site.deposit_bonuses_details')
       
        ->with('deposit_bonus', $depositBonus);
        
    }

    public function welcomeBonusesDetails($id)
    {
        $welcomeBonus = DB::table('bonus')->Where('publish',  1)->Where('welcome_bonus',  1)->Where('id',  $id)->get();

        return view('site.welcome_bonuses_details')

        ->with('welcome_bonus', $welcomeBonus);
    }

    //All Contest Start💪🌄💪

    public function demoContest()
    {       
        $demoContest = DB::table('contests')->Where('publish',  1)->Where('demo_contests',  1)->get();
        $brokerReviews = BrokerReview::pluck('id', 'logo_image');
        return view('site.demo_contest')
        ->with('demoContest', $demoContest);
    }

    public function liveContest()
    {
        $liveContest = DB::table('contests')->Where('publish',  1)->Where('live_contests',  1)->get();
        $brokerReviews = BrokerReview::pluck('id', 'logo_image');
        
        return view('site.live_contest')
        ->with('liveContest', $liveContest);
    }

    // Contest Details Start✅🪑🪑✅

    public function demoContestDetails($id)
    {  
        $demoContest = DB::table('contests')->Where('publish',  1)->Where('demo_contests',  1)->Where('id',  $id)->get();

        return view('site.demo_contest_details')
        ->with('demoContest', $demoContest);

    }
    

    public function liveContestDetails($id)
    {
        $liveContest = DB::table('contests')->Where('publish',  1)->Where('live_contests',  1)->Where('id',  $id)->get();

        return view('site.live_contest_details')
        ->with('liveContest', $liveContest);
    }

    // Contest Details End ✅🪑🪑✅

    // All Contest End ✋🛑✋✋

    // Terms and Conditions
    public function termsConditions()
    {
        return view('site.terms_conditions');
    }

    //Email Send Option
    public function sendEmail(Request $request)
    {
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message
        ];

        
        Mail::to($_GET['email'])->send(new sendEmail());
        return back()->with('message_sent', 'Your message has been sent Successfully! We will contact you soon.');
    }
}