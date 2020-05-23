<?php

//(n) = O(1) константа
//f(n) = O(log(n)) логарифмический рост
//f(n) = O(n) линейный рост
//f(n) = O(n*log(n)) квазилинейный рост
//f(n) = O(n^m) полиномиальный рост
//f(n) = O(2^n) экспоненциальный рост

class Chapter {
	protected $title;
	protected $content;

	public function __construct($title, $content)
	{
		$this->title = $title;
		$this->content = $content;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @return mixed
	 */
	public function getContent()
	{
		return $this->content;
	}

}


class Book implements IteratorAggregate {
	protected String $title;
	protected String $author;
	protected $chapters;

	/**
	 * Book constructor.
	 * @param String $title
	 * @param String $author
	 */
	public function __construct(string $title, string $author)
	{
		$this->title = $title;
		$this->author = $author;
	}


	/**
	 * @return mixed
	 */
	public function getTitle() : string
	{
		return $this->title;
	}

	/**
	 * @return mixed
	 */
	public function getAuthor()
	{
		return $this->author;
	}

	function addChapter(Chapter $chapter) {
		$this->chapters[] = $chapter;
	}

	public function getIterator()
	{
		return new ArrayIterator($this -> chapters);
	}

}
$str = "234fdgdg";
$str[0] = 'S';

$book = new Book("Книга про итераторы", "Иванов ИИ");
$book->addChapter(new Chapter("Глава 1", "Что такое итераторы"));
$book->addChapter(new Chapter("Глава 2", "Что такое сортировка"));
$book->addChapter(new Chapter("Глава 3", "Что такое О большая"));

echo "Все главы книги ".$book->getTitle().PHP_EOL;

foreach ($book as $chapter) {
	echo $chapter->getTitle().PHP_EOL;
}