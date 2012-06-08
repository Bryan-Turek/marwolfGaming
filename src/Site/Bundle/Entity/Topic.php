<?php
namespace Site\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="topics")
 */
class Topic
{
    /**
     * @ORM\Id
     * @ORM\Column(name="`topic_id`", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\Column(name="`topic_subject`", type="string", length=255)
     */
    protected $subject;

    /**
     * @ORM\Column(name="`topic_date`", type="datetime")
     */
    protected $posted;

    /**
     * @ORM\Column(name="`topic_cat`", type="integer")
     */
    protected $category;
	
	/**
	 * @ORM\Column(name="`topic_by`", type="integer")
	 */
	protected $author;
	
	/**
	 * @ORM\OneToMany(targetEntity="Post", mappedBy="topic")
	 */
	protected $posts;
	
	public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setSubject($subject) {
		$this->subject = $subject;
	}
	
	public function setDate($date) {
		$this->posted = $date;
	}
	
	public function setCategory($category) {
		$this->category = $category;
	}
	
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	public function setPosts($post) {
		$this->posts->add($post);
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getSubject() {
		return $this->subject;
	}
	
	public function getDate() {
		return $this->posted;
	}
	
	public function getCategory() {
		return $this->category;
	}
	
	public function getAuthor() {
		return $this->author;
	}
	
	public function getPosts() {
		return $this->posts;
	}
	
}