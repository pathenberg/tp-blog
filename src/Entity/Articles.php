<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
class Articles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category_id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $catch_phrase = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $author = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\Column(nullable: true)]
    private array $related_subjects = [];

    #[ORM\Column(length: 255)]
    private ?string $chapo = null;

    #[ORM\Column(length: 255)]
    private ?string $legend_main_picture = null;

    #[ORM\Column(length: 255)]
    private ?string $author_website = null;

    #[ORM\Column]
    private ?int $related_course = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?Category
    {
        return $this->category_id;
    }

    public function setCategoryId(?Category $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCatchPhrase(): ?string
    {
        return $this->catch_phrase;
    }

    public function setCatchPhrase(string $catch_phrase): self
    {
        $this->catch_phrase = $catch_phrase;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getRelatedSubjects(): array
    {
        return $this->related_subjects;
    }

    public function setRelatedSubjects(?array $related_subjects): self
    {
        $this->related_subjects = $related_subjects;

        return $this;
    }

    public function getChapo(): ?string
    {
        return $this->chapo;
    }

    public function setChapo(string $chapo): self
    {
        $this->chapo = $chapo;

        return $this;
    }

    public function getLegendMainPicture(): ?string
    {
        return $this->legend_main_picture;
    }

    public function setLegendMainPicture(string $legend_main_picture): self
    {
        $this->legend_main_picture = $legend_main_picture;

        return $this;
    }

    public function getAuthorWebsite(): ?string
    {
        return $this->author_website;
    }

    public function setAuthorWebsite(string $author_website): self
    {
        $this->author_website = $author_website;

        return $this;
    }

    public function getRelatedCourse(): ?int
    {
        return $this->related_course;
    }

    public function setRelatedCourse(int $related_course): self
    {
        $this->related_course = $related_course;

        return $this;
    }
}
