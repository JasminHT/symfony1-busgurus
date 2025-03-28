<?php


/**
 * This class adds structure of 'hr_resource_keywords_relations' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 11/25/09 18:13:32
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class HrResourceKeywordsRelationsMapBuilder implements OldMapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.HrResourceKeywordsRelationsMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(HrResourceKeywordsRelationsPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(HrResourceKeywordsRelationsPeer::TABLE_NAME);
		$tMap->setPhpName('HrResourceKeywordsRelations');
		$tMap->setClassname('HrResourceKeywordsRelations');

		$tMap->setUseIdGenerator(false);

		$tMap->addForeignPrimaryKey('HR_RESOURCES_ID', 'HrResourcesId', 'INTEGER' , 'hr_resources', 'ID', true, null);

		$tMap->addForeignPrimaryKey('HR_KEYWORDS_ID', 'HrKeywordsId', 'INTEGER' , 'hr_keywords', 'ID', true, null);

	} // doBuild()

} // HrResourceKeywordsRelationsMapBuilder
