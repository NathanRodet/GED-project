<?php

namespace ContainerTbQxid0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf976 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbeedc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties489ee = [
        
    ];

    public function getConnection()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getConnection', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getMetadataFactory', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getExpressionBuilder', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'beginTransaction', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getCache', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'transactional', array('func' => $func), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->transactional($func);
    }

    public function commit()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'commit', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->commit();
    }

    public function rollback()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'rollback', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getClassMetadata', array('className' => $className), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'createQuery', array('dql' => $dql), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'createNamedQuery', array('name' => $name), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'createQueryBuilder', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'flush', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'clear', array('entityName' => $entityName), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->clear($entityName);
    }

    public function close()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'close', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->close();
    }

    public function persist($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'persist', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'remove', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'refresh', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'detach', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'merge', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'contains', array('entity' => $entity), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getEventManager', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getConfiguration', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'isOpen', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getUnitOfWork', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getProxyFactory', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'initializeObject', array('obj' => $obj), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'getFilters', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'isFiltersStateClean', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'hasFilters', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return $this->valueHolderdf976->hasFilters();
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

        $instance->initializerbeedc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf976) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf976 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf976->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__get', ['name' => $name], $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        if (isset(self::$publicProperties489ee[$name])) {
            return $this->valueHolderdf976->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf976;

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

        $targetObject = $this->valueHolderdf976;
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
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf976;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf976;
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
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__isset', array('name' => $name), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf976;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf976;
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
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__unset', array('name' => $name), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf976;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf976;
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
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__clone', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        $this->valueHolderdf976 = clone $this->valueHolderdf976;
    }

    public function __sleep()
    {
        $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, '__sleep', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;

        return array('valueHolderdf976');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbeedc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbeedc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbeedc && ($this->initializerbeedc->__invoke($valueHolderdf976, $this, 'initializeProxy', array(), $this->initializerbeedc) || 1) && $this->valueHolderdf976 = $valueHolderdf976;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf976;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf976;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
