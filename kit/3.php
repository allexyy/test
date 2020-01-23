<?php
/**
 * Файл описание сущности 
 * 
 * В нем описываются 2 сущности Статья и Пользователь
 * @version 1.0
 * @author Alexyy
 */

/**
 * Class Article
 */
class Article{
    public $title;
    public $author;
    public $text;

    /**
     * newAuthor
     *
     * @param  mixed $newauthor
     *
     * @return void
     */
    public function newAuthor($newauthor){
        $this->author = $newauthor;
    }

}

/**
 * Class User
 */
class User{
    public $name;
    public $writedArticles =[];
    /**
     * createArticle
     *
     * @param  mixed $article
     * @param  mixed $title
     * @param  mixed $text
     *
     * @return void
     */
    public function createArticle($article, $title, $text){
        $article->title=$title;
        $article->text=$text;
        $article->author=$this->name;
        array_push($this->writedArticles,$title); 
    }
    /**
     * showArticles
     *
     * @return void
     */
    public function showArticles(){
        echo "У $this->name ". count($this->writedArticles)."статей, вот они: "
        .implode($this->writedArticles).'<br>';
    }

}
$first = new Article;
$anton = new User;
$anton->name = "Anton";
$anton->createArticle($first,'Моя первая статья','Привет мир');
$anton->showArticles();


?>