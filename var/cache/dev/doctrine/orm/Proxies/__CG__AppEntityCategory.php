<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Category extends \App\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'id_category', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'name_category', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'demandetravails', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'demandetravailsC', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'offretravails', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'challenges', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'tutoriels', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'offretravailarchives', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'produits'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'id_category', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'name_category', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'demandetravails', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'demandetravailsC', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'offretravails', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'challenges', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'posts', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'tutoriels', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'offretravailarchives', '' . "\0" . 'App\\Entity\\Category' . "\0" . 'produits'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Category $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId_category(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId_category();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId_category', []);

        return parent::getId_category();
    }

    /**
     * {@inheritDoc}
     */
    public function getNameCategory(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameCategory', []);

        return parent::getNameCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameCategory(string $name_category): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameCategory', [$name_category]);

        return parent::setNameCategory($name_category);
    }

    /**
     * {@inheritDoc}
     */
    public function getDemandetravails(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDemandetravails', []);

        return parent::getDemandetravails();
    }

    /**
     * {@inheritDoc}
     */
    public function addDemandetravail(\App\Entity\Demandetravail $demandetravail): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDemandetravail', [$demandetravail]);

        return parent::addDemandetravail($demandetravail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDemandetravail(\App\Entity\Demandetravail $demandetravail): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDemandetravail', [$demandetravail]);

        return parent::removeDemandetravail($demandetravail);
    }

    /**
     * {@inheritDoc}
     */
    public function getDemandetravailsC(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDemandetravailsC', []);

        return parent::getDemandetravailsC();
    }

    /**
     * {@inheritDoc}
     */
    public function addDemandetravailsC(\App\Entity\Demandetravail $demandetravailsC): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDemandetravailsC', [$demandetravailsC]);

        return parent::addDemandetravailsC($demandetravailsC);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDemandetravailsC(\App\Entity\Demandetravail $demandetravailsC): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDemandetravailsC', [$demandetravailsC]);

        return parent::removeDemandetravailsC($demandetravailsC);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffretravails(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffretravails', []);

        return parent::getOffretravails();
    }

    /**
     * {@inheritDoc}
     */
    public function addOffretravail(\App\Entity\Offretravail $offretravail): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOffretravail', [$offretravail]);

        return parent::addOffretravail($offretravail);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOffretravail(\App\Entity\Offretravail $offretravail): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOffretravail', [$offretravail]);

        return parent::removeOffretravail($offretravail);
    }

    /**
     * {@inheritDoc}
     */
    public function getChallenges(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChallenges', []);

        return parent::getChallenges();
    }

    /**
     * {@inheritDoc}
     */
    public function addChallenge(\App\Entity\Challenge $challenge): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChallenge', [$challenge]);

        return parent::addChallenge($challenge);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChallenge(\App\Entity\Challenge $challenge): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChallenge', [$challenge]);

        return parent::removeChallenge($challenge);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosts', []);

        return parent::getPosts();
    }

    /**
     * {@inheritDoc}
     */
    public function addPost(\App\Entity\Post $post): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPost', [$post]);

        return parent::addPost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function removePost(\App\Entity\Post $post): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePost', [$post]);

        return parent::removePost($post);
    }

    /**
     * {@inheritDoc}
     */
    public function getTutoriels(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTutoriels', []);

        return parent::getTutoriels();
    }

    /**
     * {@inheritDoc}
     */
    public function addTutoriel(\App\Entity\Tutoriel $tutoriel): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTutoriel', [$tutoriel]);

        return parent::addTutoriel($tutoriel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTutoriel(\App\Entity\Tutoriel $tutoriel): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTutoriel', [$tutoriel]);

        return parent::removeTutoriel($tutoriel);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffretravailarchives(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffretravailarchives', []);

        return parent::getOffretravailarchives();
    }

    /**
     * {@inheritDoc}
     */
    public function addOffretravailarchive(\App\Entity\Offretravailarchive $offretravailarchive): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOffretravailarchive', [$offretravailarchive]);

        return parent::addOffretravailarchive($offretravailarchive);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOffretravailarchive(\App\Entity\Offretravailarchive $offretravailarchive): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOffretravailarchive', [$offretravailarchive]);

        return parent::removeOffretravailarchive($offretravailarchive);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', []);

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\App\Entity\Produits $produit): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\App\Entity\Produits $produit): \App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
