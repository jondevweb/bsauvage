<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Beer extends \App\Entity\Beer implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'p1', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'p2', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'alcool', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'volume', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'shopBeers', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'notices'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'photo', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'p1', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'p2', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'alcool', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'color', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'volume', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'quantity', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'date', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'shopBeers', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Beer' . "\0" . 'notices'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Beer $proxy) {
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Category $category): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(?string $photo): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getP1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getP1', []);

        return parent::getP1();
    }

    /**
     * {@inheritDoc}
     */
    public function setP1(string $p1): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setP1', [$p1]);

        return parent::setP1($p1);
    }

    /**
     * {@inheritDoc}
     */
    public function getP2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getP2', []);

        return parent::getP2();
    }

    /**
     * {@inheritDoc}
     */
    public function setP2(?string $p2): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setP2', [$p2]);

        return parent::setP2($p2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlcool(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlcool', []);

        return parent::getAlcool();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlcool(string $alcool): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlcool', [$alcool]);

        return parent::setAlcool($alcool);
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getColor', []);

        return parent::getColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(string $color): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setColor', [$color]);

        return parent::setColor($color);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(string $price): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getVolume(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVolume', []);

        return parent::getVolume();
    }

    /**
     * {@inheritDoc}
     */
    public function setVolume(string $volume): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVolume', [$volume]);

        return parent::setVolume($volume);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantity(int $quantity): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantity', [$quantity]);

        return parent::setQuantity($quantity);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate(\DateTimeInterface $date): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getShopBeers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShopBeers', []);

        return parent::getShopBeers();
    }

    /**
     * {@inheritDoc}
     */
    public function addShopBeer(\App\Entity\ShopBeer $shopBeer): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShopBeer', [$shopBeer]);

        return parent::addShopBeer($shopBeer);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShopBeer(\App\Entity\ShopBeer $shopBeer): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShopBeer', [$shopBeer]);

        return parent::removeShopBeer($shopBeer);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\User $user): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\User $user): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotices(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotices', []);

        return parent::getNotices();
    }

    /**
     * {@inheritDoc}
     */
    public function addNotice(\App\Entity\Notice $notice): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNotice', [$notice]);

        return parent::addNotice($notice);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNotice(\App\Entity\Notice $notice): \App\Entity\Beer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNotice', [$notice]);

        return parent::removeNotice($notice);
    }

}