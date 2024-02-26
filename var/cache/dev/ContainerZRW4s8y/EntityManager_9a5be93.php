<?php

namespace ContainerZRW4s8y;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder498b4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer38334 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3adc7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getConnection', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getMetadataFactory', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getExpressionBuilder', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'beginTransaction', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getCache', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'transactional', array('func' => $func), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'commit', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->commit();
    }

    public function rollback()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'rollback', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getClassMetadata', array('className' => $className), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'createQuery', array('dql' => $dql), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'createNamedQuery', array('name' => $name), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'createQueryBuilder', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'flush', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'clear', array('entityName' => $entityName), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->clear($entityName);
    }

    public function close()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'close', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->close();
    }

    public function persist($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'persist', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'remove', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'refresh', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'detach', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'merge', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'contains', array('entity' => $entity), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getEventManager', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getConfiguration', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'isOpen', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getUnitOfWork', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getProxyFactory', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'initializeObject', array('obj' => $obj), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'getFilters', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'isFiltersStateClean', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'hasFilters', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return $this->valueHolder498b4->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer38334 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder498b4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder498b4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder498b4->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__get', ['name' => $name], $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        if (isset(self::$publicProperties3adc7[$name])) {
            return $this->valueHolder498b4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder498b4;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder498b4;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder498b4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder498b4;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__isset', array('name' => $name), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder498b4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder498b4;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__unset', array('name' => $name), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder498b4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder498b4;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__clone', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        $this->valueHolder498b4 = clone $this->valueHolder498b4;
    }

    public function __sleep()
    {
        $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, '__sleep', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;

        return array('valueHolder498b4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer38334 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer38334;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer38334 && ($this->initializer38334->__invoke($valueHolder498b4, $this, 'initializeProxy', array(), $this->initializer38334) || 1) && $this->valueHolder498b4 = $valueHolder498b4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder498b4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder498b4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
