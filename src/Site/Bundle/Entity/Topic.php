<?php
namespace Site\Bundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Site\Bundle\Repository\TopicRepository")
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
	 * @ORM\ManyToOne(targetEntity="Category", inversedBy="topics")
     * @ORM\JoinColumn(name="topic_cat", referencedColumnName="cat_id")
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
	
	/**
     * @ORM\Column(name="`topic_rank`", type="integer")
     */
    protected $rank;
	
	public function __construct()
    {
        $this->posts = new ArrayCollection();
		$this->rank = 0;
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
	
	public function setRank($rank) {
		$this->rank = $rank;
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
	
	public function getRank() {
		return $this->rank;
	}
	
}