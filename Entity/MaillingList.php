<?php

namespace SpiritDev\Bundle\CIHubPostBundle\Entity;

use CIHub\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * MaillingList
 *
 * @ORM\Table(name="cihub_post_mailling_list")
 * @ORM\Entity
 */
class MaillingList
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=1024, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=1024, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=1024, nullable=false)
     */
    private $mail;

    /**
     * @var \CIHub\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CIHub\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MaillingList
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     * @return MaillingList
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return MaillingList
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return MaillingList
     */
    public function setUser(\CIHub\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CIHub\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
