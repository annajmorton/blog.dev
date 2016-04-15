<?php 

class PostTableSeeder extends Seeder 
{

	public function run()
	{
		$post1 = new Post();
		$post1->title = 'I left a good job in the city';
		$post1->body = "roll'n on the river! what a choice. a good choice. enjoying the gift of watching aurora and azalea growup. putting them to sleep last night was an experience of devine grace.";
		$post1->user_id = 1;
		$post1->save();

		$post2 = new Post();
		$post2->title = 'What a wonderful world';
		$post2->body = "I went so fast this morning on my bike. The seat has been defunct for the last few weeks (em... months?). I fixed the angle of attack and raise the post - i flew people. like a bird on the wind as it dips and falls";
		$post2->user_id = 1;
		$post2->save();

		$post3 = new Post();
		$post3->title = 'Will you comfort me i my time of need';
		$post3->body = "its friday and i am ready";
		$post3->user_id = 1;
		$post3->save();

		$post4 = new Post();
		$post4->title = 'If i had a hammer';
		$post4->body = "tuning the radio to democratic canadates fighting this morning made me upset. the prospect of voting in the next election is depressing.";
		$post4->user_id = 1;
		$post4->save();

		$post5 = new Post();
		$post5->title = 'heartbreaker';
		$post5->body = "delicious, locally roasted coffee. period.";
		$post5->user_id = 1;
		$post5->save();


	}

}