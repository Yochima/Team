<?php

namespace Team\Model\Base;

use \Exception;
use \PDO;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Team\Model\PersonFunctionVersion as ChildPersonFunctionVersion;
use Team\Model\PersonFunctionVersionQuery as ChildPersonFunctionVersionQuery;
use Team\Model\Map\PersonFunctionVersionTableMap;

/**
 * Base class that represents a query for the 'person_function_version' table.
 *
 *
 *
 * @method     ChildPersonFunctionVersionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildPersonFunctionVersionQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     ChildPersonFunctionVersionQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildPersonFunctionVersionQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     ChildPersonFunctionVersionQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     ChildPersonFunctionVersionQuery orderByVersionCreatedAt($order = Criteria::ASC) Order by the version_created_at column
 * @method     ChildPersonFunctionVersionQuery orderByVersionCreatedBy($order = Criteria::ASC) Order by the version_created_by column
 * @method     ChildPersonFunctionVersionQuery orderByPersonFunctionLinkIds($order = Criteria::ASC) Order by the person_function_link_ids column
 * @method     ChildPersonFunctionVersionQuery orderByPersonFunctionLinkVersions($order = Criteria::ASC) Order by the person_function_link_versions column
 *
 * @method     ChildPersonFunctionVersionQuery groupById() Group by the id column
 * @method     ChildPersonFunctionVersionQuery groupByCode() Group by the code column
 * @method     ChildPersonFunctionVersionQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildPersonFunctionVersionQuery groupByUpdatedAt() Group by the updated_at column
 * @method     ChildPersonFunctionVersionQuery groupByVersion() Group by the version column
 * @method     ChildPersonFunctionVersionQuery groupByVersionCreatedAt() Group by the version_created_at column
 * @method     ChildPersonFunctionVersionQuery groupByVersionCreatedBy() Group by the version_created_by column
 * @method     ChildPersonFunctionVersionQuery groupByPersonFunctionLinkIds() Group by the person_function_link_ids column
 * @method     ChildPersonFunctionVersionQuery groupByPersonFunctionLinkVersions() Group by the person_function_link_versions column
 *
 * @method     ChildPersonFunctionVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildPersonFunctionVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildPersonFunctionVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildPersonFunctionVersionQuery leftJoinPersonFunction($relationAlias = null) Adds a LEFT JOIN clause to the query using the PersonFunction relation
 * @method     ChildPersonFunctionVersionQuery rightJoinPersonFunction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PersonFunction relation
 * @method     ChildPersonFunctionVersionQuery innerJoinPersonFunction($relationAlias = null) Adds a INNER JOIN clause to the query using the PersonFunction relation
 *
 * @method     ChildPersonFunctionVersion findOne(ConnectionInterface $con = null) Return the first ChildPersonFunctionVersion matching the query
 * @method     ChildPersonFunctionVersion findOneOrCreate(ConnectionInterface $con = null) Return the first ChildPersonFunctionVersion matching the query, or a new ChildPersonFunctionVersion object populated from the query conditions when no match is found
 *
 * @method     ChildPersonFunctionVersion findOneById(int $id) Return the first ChildPersonFunctionVersion filtered by the id column
 * @method     ChildPersonFunctionVersion findOneByCode(string $code) Return the first ChildPersonFunctionVersion filtered by the code column
 * @method     ChildPersonFunctionVersion findOneByCreatedAt(string $created_at) Return the first ChildPersonFunctionVersion filtered by the created_at column
 * @method     ChildPersonFunctionVersion findOneByUpdatedAt(string $updated_at) Return the first ChildPersonFunctionVersion filtered by the updated_at column
 * @method     ChildPersonFunctionVersion findOneByVersion(int $version) Return the first ChildPersonFunctionVersion filtered by the version column
 * @method     ChildPersonFunctionVersion findOneByVersionCreatedAt(string $version_created_at) Return the first ChildPersonFunctionVersion filtered by the version_created_at column
 * @method     ChildPersonFunctionVersion findOneByVersionCreatedBy(string $version_created_by) Return the first ChildPersonFunctionVersion filtered by the version_created_by column
 * @method     ChildPersonFunctionVersion findOneByPersonFunctionLinkIds(array $person_function_link_ids) Return the first ChildPersonFunctionVersion filtered by the person_function_link_ids column
 * @method     ChildPersonFunctionVersion findOneByPersonFunctionLinkVersions(array $person_function_link_versions) Return the first ChildPersonFunctionVersion filtered by the person_function_link_versions column
 *
 * @method     array findById(int $id) Return ChildPersonFunctionVersion objects filtered by the id column
 * @method     array findByCode(string $code) Return ChildPersonFunctionVersion objects filtered by the code column
 * @method     array findByCreatedAt(string $created_at) Return ChildPersonFunctionVersion objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return ChildPersonFunctionVersion objects filtered by the updated_at column
 * @method     array findByVersion(int $version) Return ChildPersonFunctionVersion objects filtered by the version column
 * @method     array findByVersionCreatedAt(string $version_created_at) Return ChildPersonFunctionVersion objects filtered by the version_created_at column
 * @method     array findByVersionCreatedBy(string $version_created_by) Return ChildPersonFunctionVersion objects filtered by the version_created_by column
 * @method     array findByPersonFunctionLinkIds(array $person_function_link_ids) Return ChildPersonFunctionVersion objects filtered by the person_function_link_ids column
 * @method     array findByPersonFunctionLinkVersions(array $person_function_link_versions) Return ChildPersonFunctionVersion objects filtered by the person_function_link_versions column
 *
 */
abstract class PersonFunctionVersionQuery extends ModelCriteria
{

    /**
     * Initializes internal state of \Team\Model\Base\PersonFunctionVersionQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'thelia', $modelName = '\\Team\\Model\\PersonFunctionVersion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildPersonFunctionVersionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildPersonFunctionVersionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof \Team\Model\PersonFunctionVersionQuery) {
            return $criteria;
        }
        $query = new \Team\Model\PersonFunctionVersionQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$id, $version] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildPersonFunctionVersion|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PersonFunctionVersionTableMap::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(PersonFunctionVersionTableMap::DATABASE_NAME);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return   ChildPersonFunctionVersion A model object, or null if the key is not found
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT ID, CODE, CREATED_AT, UPDATED_AT, VERSION, VERSION_CREATED_AT, VERSION_CREATED_BY, PERSON_FUNCTION_LINK_IDS, PERSON_FUNCTION_LINK_VERSIONS FROM person_function_version WHERE ID = :p0 AND VERSION = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            $obj = new ChildPersonFunctionVersion();
            $obj->hydrate($row);
            PersonFunctionVersionTableMap::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildPersonFunctionVersion|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PersonFunctionVersionTableMap::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PersonFunctionVersionTableMap::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PersonFunctionVersionTableMap::VERSION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @see       filterByPersonFunction()
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the version column
     *
     * Example usage:
     * <code>
     * $query->filterByVersion(1234); // WHERE version = 1234
     * $query->filterByVersion(array(12, 34)); // WHERE version IN (12, 34)
     * $query->filterByVersion(array('min' => 12)); // WHERE version > 12
     * </code>
     *
     * @param     mixed $version The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByVersion($version = null, $comparison = null)
    {
        if (is_array($version)) {
            $useMinMax = false;
            if (isset($version['min'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION, $version['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($version['max'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION, $version['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION, $version, $comparison);
    }

    /**
     * Filter the query on the version_created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionCreatedAt('2011-03-14'); // WHERE version_created_at = '2011-03-14'
     * $query->filterByVersionCreatedAt('now'); // WHERE version_created_at = '2011-03-14'
     * $query->filterByVersionCreatedAt(array('max' => 'yesterday')); // WHERE version_created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $versionCreatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByVersionCreatedAt($versionCreatedAt = null, $comparison = null)
    {
        if (is_array($versionCreatedAt)) {
            $useMinMax = false;
            if (isset($versionCreatedAt['min'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($versionCreatedAt['max'])) {
                $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION_CREATED_AT, $versionCreatedAt, $comparison);
    }

    /**
     * Filter the query on the version_created_by column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionCreatedBy('fooValue');   // WHERE version_created_by = 'fooValue'
     * $query->filterByVersionCreatedBy('%fooValue%'); // WHERE version_created_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $versionCreatedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByVersionCreatedBy($versionCreatedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($versionCreatedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $versionCreatedBy)) {
                $versionCreatedBy = str_replace('*', '%', $versionCreatedBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::VERSION_CREATED_BY, $versionCreatedBy, $comparison);
    }

    /**
     * Filter the query on the person_function_link_ids column
     *
     * @param     array $personFunctionLinkIds The values to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPersonFunctionLinkIds($personFunctionLinkIds = null, $comparison = null)
    {
        $key = $this->getAliasedColName(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_IDS);
        if (null === $comparison || $comparison == Criteria::CONTAINS_ALL) {
            foreach ($personFunctionLinkIds as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addAnd($key, $value, Criteria::LIKE);
                } else {
                    $this->add($key, $value, Criteria::LIKE);
                }
            }

            return $this;
        } elseif ($comparison == Criteria::CONTAINS_SOME) {
            foreach ($personFunctionLinkIds as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addOr($key, $value, Criteria::LIKE);
                } else {
                    $this->add($key, $value, Criteria::LIKE);
                }
            }

            return $this;
        } elseif ($comparison == Criteria::CONTAINS_NONE) {
            foreach ($personFunctionLinkIds as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addAnd($key, $value, Criteria::NOT_LIKE);
                } else {
                    $this->add($key, $value, Criteria::NOT_LIKE);
                }
            }
            $this->addOr($key, null, Criteria::ISNULL);

            return $this;
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_IDS, $personFunctionLinkIds, $comparison);
    }

    /**
     * Filter the query on the person_function_link_ids column
     * @param     mixed $personFunctionLinkIds The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::CONTAINS_ALL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPersonFunctionLinkId($personFunctionLinkIds = null, $comparison = null)
    {
        if (null === $comparison || $comparison == Criteria::CONTAINS_ALL) {
            if (is_scalar($personFunctionLinkIds)) {
                $personFunctionLinkIds = '%| ' . $personFunctionLinkIds . ' |%';
                $comparison = Criteria::LIKE;
            }
        } elseif ($comparison == Criteria::CONTAINS_NONE) {
            $personFunctionLinkIds = '%| ' . $personFunctionLinkIds . ' |%';
            $comparison = Criteria::NOT_LIKE;
            $key = $this->getAliasedColName(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_IDS);
            if ($this->containsKey($key)) {
                $this->addAnd($key, $personFunctionLinkIds, $comparison);
            } else {
                $this->addAnd($key, $personFunctionLinkIds, $comparison);
            }
            $this->addOr($key, null, Criteria::ISNULL);

            return $this;
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_IDS, $personFunctionLinkIds, $comparison);
    }

    /**
     * Filter the query on the person_function_link_versions column
     *
     * @param     array $personFunctionLinkVersions The values to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPersonFunctionLinkVersions($personFunctionLinkVersions = null, $comparison = null)
    {
        $key = $this->getAliasedColName(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_VERSIONS);
        if (null === $comparison || $comparison == Criteria::CONTAINS_ALL) {
            foreach ($personFunctionLinkVersions as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addAnd($key, $value, Criteria::LIKE);
                } else {
                    $this->add($key, $value, Criteria::LIKE);
                }
            }

            return $this;
        } elseif ($comparison == Criteria::CONTAINS_SOME) {
            foreach ($personFunctionLinkVersions as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addOr($key, $value, Criteria::LIKE);
                } else {
                    $this->add($key, $value, Criteria::LIKE);
                }
            }

            return $this;
        } elseif ($comparison == Criteria::CONTAINS_NONE) {
            foreach ($personFunctionLinkVersions as $value) {
                $value = '%| ' . $value . ' |%';
                if ($this->containsKey($key)) {
                    $this->addAnd($key, $value, Criteria::NOT_LIKE);
                } else {
                    $this->add($key, $value, Criteria::NOT_LIKE);
                }
            }
            $this->addOr($key, null, Criteria::ISNULL);

            return $this;
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_VERSIONS, $personFunctionLinkVersions, $comparison);
    }

    /**
     * Filter the query on the person_function_link_versions column
     * @param     mixed $personFunctionLinkVersions The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::CONTAINS_ALL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPersonFunctionLinkVersion($personFunctionLinkVersions = null, $comparison = null)
    {
        if (null === $comparison || $comparison == Criteria::CONTAINS_ALL) {
            if (is_scalar($personFunctionLinkVersions)) {
                $personFunctionLinkVersions = '%| ' . $personFunctionLinkVersions . ' |%';
                $comparison = Criteria::LIKE;
            }
        } elseif ($comparison == Criteria::CONTAINS_NONE) {
            $personFunctionLinkVersions = '%| ' . $personFunctionLinkVersions . ' |%';
            $comparison = Criteria::NOT_LIKE;
            $key = $this->getAliasedColName(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_VERSIONS);
            if ($this->containsKey($key)) {
                $this->addAnd($key, $personFunctionLinkVersions, $comparison);
            } else {
                $this->addAnd($key, $personFunctionLinkVersions, $comparison);
            }
            $this->addOr($key, null, Criteria::ISNULL);

            return $this;
        }

        return $this->addUsingAlias(PersonFunctionVersionTableMap::PERSON_FUNCTION_LINK_VERSIONS, $personFunctionLinkVersions, $comparison);
    }

    /**
     * Filter the query by a related \Team\Model\PersonFunction object
     *
     * @param \Team\Model\PersonFunction|ObjectCollection $personFunction The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function filterByPersonFunction($personFunction, $comparison = null)
    {
        if ($personFunction instanceof \Team\Model\PersonFunction) {
            return $this
                ->addUsingAlias(PersonFunctionVersionTableMap::ID, $personFunction->getId(), $comparison);
        } elseif ($personFunction instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PersonFunctionVersionTableMap::ID, $personFunction->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPersonFunction() only accepts arguments of type \Team\Model\PersonFunction or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PersonFunction relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function joinPersonFunction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PersonFunction');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'PersonFunction');
        }

        return $this;
    }

    /**
     * Use the PersonFunction relation PersonFunction object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   \Team\Model\PersonFunctionQuery A secondary query class using the current class as primary query
     */
    public function usePersonFunctionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPersonFunction($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PersonFunction', '\Team\Model\PersonFunctionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildPersonFunctionVersion $personFunctionVersion Object to remove from the list of results
     *
     * @return ChildPersonFunctionVersionQuery The current query, for fluid interface
     */
    public function prune($personFunctionVersion = null)
    {
        if ($personFunctionVersion) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PersonFunctionVersionTableMap::ID), $personFunctionVersion->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PersonFunctionVersionTableMap::VERSION), $personFunctionVersion->getVersion(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the person_function_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PersonFunctionVersionTableMap::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PersonFunctionVersionTableMap::clearInstancePool();
            PersonFunctionVersionTableMap::clearRelatedInstancePool();

            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $affectedRows;
    }

    /**
     * Performs a DELETE on the database, given a ChildPersonFunctionVersion or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ChildPersonFunctionVersion object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *         rethrown wrapped into a PropelException.
     */
     public function delete(ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(PersonFunctionVersionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(PersonFunctionVersionTableMap::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();


        PersonFunctionVersionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            PersonFunctionVersionTableMap::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

} // PersonFunctionVersionQuery
