<?php

namespace ContainerZK8qvVi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere437c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf6275 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8298e = [
        
    ];

    public function getConnection()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getConnection', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getMetadataFactory', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getExpressionBuilder', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'beginTransaction', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getCache', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'transactional', array('func' => $func), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->transactional($func);
    }

    public function commit()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'commit', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->commit();
    }

    public function rollback()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'rollback', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'createQuery', array('dql' => $dql), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'createQueryBuilder', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'flush', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'clear', array('entityName' => $entityName), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->clear($entityName);
    }

    public function close()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'close', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->close();
    }

    public function persist($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'persist', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'remove', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'refresh', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'detach', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'merge', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'contains', array('entity' => $entity), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getEventManager', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getConfiguration', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'isOpen', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getUnitOfWork', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getProxyFactory', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'getFilters', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'isFiltersStateClean', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'hasFilters', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return $this->valueHoldere437c->hasFilters();
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

        $instance->initializerf6275 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere437c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere437c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere437c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__get', ['name' => $name], $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        if (isset(self::$publicProperties8298e[$name])) {
            return $this->valueHoldere437c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere437c;

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

        $targetObject = $this->valueHoldere437c;
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
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere437c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere437c;
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
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__isset', array('name' => $name), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere437c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere437c;
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
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__unset', array('name' => $name), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere437c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere437c;
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
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__clone', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        $this->valueHoldere437c = clone $this->valueHoldere437c;
    }

    public function __sleep()
    {
        $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, '__sleep', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;

        return array('valueHoldere437c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6275 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6275;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf6275 && ($this->initializerf6275->__invoke($valueHoldere437c, $this, 'initializeProxy', array(), $this->initializerf6275) || 1) && $this->valueHoldere437c = $valueHoldere437c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere437c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere437c;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
