<?php
namespace entities;

/**
 * @Entity
 * @Table(name="users")
 */
class User
{
    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="smallint")
     */
    private $id;

    /**
     * @Column(type="string", 
     *          name="first_name", 
     *          length=255, 
     *          unique=false, 
     *          nullable=true)
     */
    private $firstName;

    /**
    * @Column(type="string", 
     *          name="last_name", 
     *          length=255, 
     *          unique=false, 
     *          nullable=true)
     */
    private $lastName;

    /**
    * @Column(type="string", 
     *          name="user_name", 
     *          length=255, 
     *          unique=true, 
     *          nullable=false)
     */
    private $userName;

    /**
    * @Column(type="string", 
     *          name="password", 
     *          length=255, 
     *          unique=false, 
     *          nullable=false)
     */
    private $password;

    /**
    * @Column(type="datetime", 
     *          name="created_on", 
     *          nullable=false)
     */
    private $createdOn;

    /**
    * @Column(type="datetime", 
     *          name="updated_on", 
     *          nullable=true)
     */
    private $updatedOn;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName.
     *
     * @param string|null $firstName
     *
     * @return User
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $lastName
     *
     * @return User
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set userName.
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set createdOn.
     *
     * @param \DateTime $createdOn
     *
     * @return User
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn.
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updatedOn.
     *
     * @param \DateTime|null $updatedOn
     *
     * @return User
     */
    public function setUpdatedOn($updatedOn = null)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn.
     *
     * @return \DateTime|null
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }
}
