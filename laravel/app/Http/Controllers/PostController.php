<?php
	namespace app\Http\Controllers;
    use Illuminate\Support\Facades\DB;
	class PostController extends Controller
        {
    
            public function getAll()
            {
                $posts = Post::all();
                $this->view('posts/all', ['posts' => $posts]);
            }
        
            /**
             * @param int $id ID статьи
             */
            public function getOne($id)
            {
                $post = Post::find($id);
                $this->view('posts/one', ['post' => $post]);
            }
        }
        ?>