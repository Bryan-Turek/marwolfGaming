<?php
namespace Site\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(name="`cat_id`", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @ORM\Column(name="`cat_name`", type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(name="`cat_description`", type="string", length=255)
     */
    protected $description;

    /**
	 * @ORM\Column(name="`cat_parent`", type="integer")
     */
    protected $parentcat;
	
	/**
	 * @ORM\OneToMany(targetEntity="Topic", mappedBy="category")
	 */
	protected $topics;
	
	public function __toString() {
		return $this->name;
	}
	
	public function __construct() {
		$this->topics = new ArrayCollection();
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function setParentcat($parentcat) {
		$this->parentcat = $parentcat;
	}
	
	public function setTopics($topic) {
		$this->topics->add($topic);
	}
	
	public function getId() {
		return $this->id;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getParentcat() {
		return $this->parentcat;
	}
	
	public function getTopics() {
		return $this->topics;
	}
	
}