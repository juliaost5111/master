<?php
	namespace app\Http\Controllers;
    use Illuminate\Support\Facades\DB;
	class PostController extends Controller
	{
		public function show()
		{
			DB::table('posts')->where('id', '>', 5)->dd();
		}
	}
	$posts = DB::table('posts')
	->where('Pochta', '>', 10)
	->where('Ima', '<', 20)
	->get();
	
    $post = DB::table('posts')->where('id', 1)->first();


	$post = DB::table('posts')
		->whereSlug('Email')
		->get();
	
	dump($post);

?>

	

