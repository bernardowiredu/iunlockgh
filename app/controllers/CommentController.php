<?php


class CommentController extends BaseController {

public function postComments(){

	$posted = Input::get();

	$comment = new Comment;

	$comment->username = $posted['username'];
	$comment->comments = $posted['comments'];
	$comment->location = $posted['location'];
	$comment->date = $posted['date'];
	$comment->time = $posted['time'];

	$comment->save();

	return Redirect::back()->with('success', 'Thanks for your comments!!');
}


	
	public function getComments() {

		$reviews = Comment::take(100)->orderBy('created_at','DESC')->paginate(6);

        return View::make('users.reviews')->with('reviews', $reviews);
    }



}
