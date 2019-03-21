//DoctrineTest/classes/Entity/Person.php
<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="persons")
 */
class Person {
     /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\Column(type="string", length=50)
     */
    private $firstname;
     /**
     *
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;
    
    
    
    // ----------- GETTER / SETTER -----------------
    function getId() {
        return $this->id;
    }
    function getFirstname() {
        return $this->firstname;
    }
    function getLastname() {
        return $this->lastname;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }
    function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
}
