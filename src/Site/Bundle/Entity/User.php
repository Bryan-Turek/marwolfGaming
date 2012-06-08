<?php
namespace Site\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(name="`user_id`", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\Column(name="`user_name`", type="string", length=30)
     */
    protected $name;

    /**
     * @ORM\Column(name="`user_pass`", type="string", length=255)
     */
    protected $password;

    /**
     * @ORM\Column(name="`user_email`", type="string", length=255)
     */
    protected $email;
	
	/**
	 * @ORM\Column(name="`user_date`", type="datetime")
	 */
	protected $registered;
	
	/**
	 * @ORM\Column(name="`user_level`", type="integer")
	 */
	protected $rank;
	
	/**
	 * @ORM\OneToMany(targetEntity="Post", mappedBy="author")
	 */
	protected $posts;
	
	public function __construct()
    {
        $this->posts = new ArrayCollection();
    }
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function setPassword($password) {
		$this->password = $password;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function setRegistered($registered) {
		$this->registered = $registered;
	}
	
	public function setRank($rank) {
		$this->rank = $rank;
	}
	
	public function setPosts($post) {
		$this->posts->add($post);
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getPassword() {
		return $this->password;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function getRegistered() {
		return $this->registered;
	}
	
	public function getRank() {
		return $this->rank;
	}
	
	public function getPosts() {
		return $this->posts;
	}
	
}