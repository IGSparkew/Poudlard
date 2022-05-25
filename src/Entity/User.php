<?php

namespace App\Entity;



class User
{
  private int $id;
  private string $name;
  private string $firstName;
  private string $username;
  private string $password;
  private string $email;
  private string $birthDate;
  private int $idDroit;

  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getFirstName(): string
  {
    return $this->firstName;
  }

  public function setFirstName(string $firstName): self
  {
    $this->firstName = $firstName;

    return $this;
  }

  public function getUsername(): string
  {
    return $this->username;
  }

  public function setUsername(string $username): self
  {
    $this->username = $username;

    return $this;
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function setPassword(string $password): self
  {
    $this->password = $password;

    return $this;
  }

  public function getEmail(): string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }

  public function getBirthDate(): string
  {
    return $this->birthDate;
  }

  public function setBirthDate(string $birthDate): self
  {
    $this->birthDate = $birthDate;

    return $this;
  }

  /**
   * Get the value of roleId
   */ 
  public function getIdDroit()
  {
    return $this->idDroit;
  }

  /**
   * Set the value of roleId
   *
   * @return  self
   */ 
  public function setIdDroit(int $Idrole)
  {
    $this->idDroit = $Idrole;

    return $this;
  }
}
