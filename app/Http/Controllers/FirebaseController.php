<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
class FirebaseController extends Controller
{

    public function index(){
        // dd('tes');
        // Benerin Querynya disini Den
        // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/tiktal-2508-firebase-adminsdk-td0zf-a2ebba06d8.json');
        // $firebase = (new Factory)
        // ->withServiceAccount($serviceAccount)
        // ->withDatabaseUri('https://tiktal-2508.firebaseio.com/')
        // ->create();
        // $database = $firebase->getDatabase();
        // $newPost = $database
        // ->getReference('blog/posts')
        // ->push([
        // 'title' => 'Post title',
        // 'body' => 'This should probably be longer.'
        // ]);
        //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
        //$newPost->getChild('title')->set('Changed post title');
        //$newPost->getValue(); // Fetches the data from the realtime database
        //$newPost->remove();
    echo"<pre>";
    print_r($newPost->getvalue());
    }
}
?>
