<?php
namespace Site\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(name="`post_id`", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\Column(name="`post_content`", type="text")
     */
    protected $content;

    /**
     * @ORM\Column(name="`post_date`", type="datetime")
     */
    protected $posted;

    /**
	 * @ORM\ManyToOne(targetEntity="Topic", inversedBy="posts")
     * @ORM\JoinColumn(name="post_topic", referencedColumnName="topic_id")
     */
    protected $topic;
	
	/**
	 * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="post_by", referencedColumnName="user_id")
     */
	protected $author;
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setContent($content) {
		$this->content = $content;
	}
	
	public function setPosted($posted) {
		$this->posted = $posted;
	}
	
	public function setTopic($topic) {
		$this->topic = $topic;
	}
	
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function getPosted() {
		return $this->posted;
	}
	
	public function getTopic() {
		return $this->topic;
	}
	
	public function getAuthor() {
		return $this->author;
	}
	
}