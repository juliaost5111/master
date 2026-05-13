<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function newPost(Request $request)
    {
        
        if ($request->isMethod('post')) {
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            
            if ($post->save()) {
                return redirect('/post/new'); 
            } else {
                return back()->withErrors('Ошибка при сохранении');
            }
        }
        
        return view('post.new');
    }
    public function editPost(Request $request, $id) {
      $post = Post::find($id);
      $post->title = 'Новый заголовок';
      $post->description = 'Новое короткое описание';
      $post->save();

      return redirect()->route('post.show', $id);
}
Route::match(['get', 'post'], 'post/edit/{id}', 'PostController@editPost');
}

$account = App\Account::find(10);
$user->account()->associate($account);
$user->save();

$user->account()->dissociate();
$user->save();
?>