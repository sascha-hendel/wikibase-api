<?php

namespace Wikibase\Api\Service;

use Mediawiki\Api\MediawikiApi;
use Wikibase\DataModel\Entity\Entity;
use Wikibase\DataModel\Entity\EntityId;
use Wikibase\DataModel\Term\Term;

/**
 * @author Adam Shorland
 */
class DescriptionSetter {

	/**
	 * @var MediawikiApi
	 */
	private $api;

	/**
	 * @param MediawikiApi $api
	 */
	public function __construct( MediawikiApi $api ) {
		$this->api = $api;
	}

	/**
	 * @since 0.2
	 * @param Term $description
	 * @param EntityId|Entity $target
	 */
	public function setDescription( Term $description, $target ) {
		//TODO implement me
		throw new \BadMethodCallException( 'Not yet implemented' );
	}

} 