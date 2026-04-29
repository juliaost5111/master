<?php
	namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
	class PostController extends Controller
	{
		public function show()
		{
			DB::table('posts')->where('id', '>', 5)->dd();
		}
	}
	$posts = DB::table('use')
	->where('Pochta', '>', 10)
	->where('Ima', '<', 20)
	->get();
	
    $post = DB::table('use')->where('id', 1)->first();


	$post = DB::table('use')
		->whereSlug('Email')
		->get();
	
	dump($post);

?>

	

