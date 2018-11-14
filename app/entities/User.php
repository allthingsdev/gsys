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
    private $first_name;

    /**
    * @Column(type="string", 
     *          name="last_name", 
     *          length=255, 
     *          unique=false, 
     *          nullable=true)
     */
    private $last_name;

    /**
    * @Column(type="string", 
     *          name="user_name", 
     *          length=255, 
     *          unique=true, 
     *          nullable=false)
     */
    private $user_name;

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
    private $created_on;

    /**
    * @Column(type="datetime", 
     *          name="updated_on", 
     *          nullable=true)
     */
    private $updated_on;

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
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->first_name;
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
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->last_name;
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
        $this->user_name = $userName;

        return $this;
    }

    /**
     * Get userName.
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->user_name;
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
        $this->created_on = $createdOn;

        return $this;
    }

    /**
     * Get createdOn.
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->created_on;
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
        $this->updated_on = $updatedOn;

        return $this;
    }

    /**
     * Get updatedOn.
     *
     * @return \DateTime|null
     */
    public function getUpdatedOn()
    {
        return $this->updated_on;
    }
}
