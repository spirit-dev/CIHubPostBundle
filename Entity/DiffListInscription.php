<?php

namespace SpiritDev\Bundle\CIHubPostBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DiffListInscription
 *
 * @ORM\Table(name="cihub_post_diff_list_inscription")
 * @ORM\Entity
 */
class DiffListInscription
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
     * @var \CIHub\CoreBundle\Entity\DiffList
     *
     * @ORM\ManyToOne(targetEntity="CIHub\CoreBundle\Entity\DiffList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="diff_list_id", referencedColumnName="id")
     * })
     */
    private $diffList;

    /**
     * @var \CIHub\CoreBundle\Entity\MaillingList
     *
     * @ORM\ManyToOne(targetEntity="CIHub\CoreBundle\Entity\MaillingList")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mail_list_id", referencedColumnName="id")
     * })
     */
    private $mailList;



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
     * Set diffList
     *
     * @param \DiffList $diffList
     * @return DiffListInscription
     */
    public function setDiffList(DiffList $diffList = null)
    {
        $this->diffList = $diffList;

        return $this;
    }

    /**
     * Get diffList
     *
     * @return \DiffList
     */
    public function getDiffList()
    {
        return $this->diffList;
    }

    /**
     * Set mailList
     *
     * @param \MaillingList $mailList
     * @return DiffListInscription
     */
    public function setMailList(\MaillingList $mailList = null)
    {
        $this->mailList = $mailList;

        return $this;
    }

    /**
     * Get mailList
     *
     * @return \MaillingList
     */
    public function getMailList()
    {
        return $this->mailList;
    }
}
