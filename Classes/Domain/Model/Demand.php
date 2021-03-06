<?php
namespace Yacy\Yacy\Domain\Model;


use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Eike Starkmann <eikestarkmann@web.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Damand object for yacy search
 */
class Demand extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject {

	/**
	 * host
	 *
	 * @var string
	 */
	protected $host = '';

	/**
	 * domain
	 *
	 * @var string
	 */
	protected $domain = '';

	/**
	 * query
	 *
	 * @var string
	 */
	protected $query = '';

	/**
	 * startRecord
	 *
	 * @var integer
	 */
	protected $startRecord = 0;

	/**
	 * maximumRecords
	 *
	 * @var integer
	 */
	protected $maximumRecords = 0;

	/**
	 * contentDom
	 *
	 * @var string
	 */
	protected $contentDom = '';

	/**
	 * resource
	 *
	 * @var string
	 */
	protected $resource = '';

	/**
	 * urlMaskFilter
	 *
	 * @var string
	 */
	protected $urlMaskFilter = '';

	/**
	 * preferMaskFilter
	 *
	 * @var string
	 */
	protected $preferMaskFilter = '';

	/**
	 * verify
	 *
	 * @var string
	 */
	protected $verify = '';

	/**
	 * language
	 *
	 * @var string
	 */
	protected $language = '';

	/**
	 * port
	 *
	 * @var integer
	 */
	protected $port = 0;
	
	/**
	 * The result page to reffer to
	 * 
	 * @var integer
	 */
	protected $resultPage = 0;

	/**
	 * Returns the host
	 *
	 * @return string $host
	 */
	public function getHost() {
		return $this->host;
	}

	/**
	 * Sets the host
	 *
	 * @param string $host
	 * @return void
	 */
	public function setHost($host) {
		$this->host = $host;
	}

	/**
	 * Returns the domain
	 *
	 * @return string $domain
	 */
	public function getDomain() {
		return $this->domain;
	}

	/**
	 * Sets the domain
	 *
	 * @param string $domain
	 * @return void
	 */
	public function setDomain($domain) {
		$this->domain = $domain;
	}

	/**
	 * Returns the query
	 *
	 * @return string $query
	 */
	public function getQuery() {
		return $this->query;
	}

	/**
	 * Sets the query
	 *
	 * @param string $query
	 * @return void
	 */
	public function setQuery($query) {
		$this->query = $query;
	}

	/**
	 * Returns the startRecord
	 *
	 * @return integer $startRecord
	 */
	public function getStartRecord() {
		return $this->startRecord;
	}

	/**
	 * Sets the startRecord
	 *
	 * @param integer $startRecord
	 * @return void
	 */
	public function setStartRecord($startRecord) {
		$this->startRecord = $startRecord;
	}

	/**
	 * Returns the maximumRecords
	 *
	 * @return integer $maximumRecords
	 */
	public function getMaximumRecords() {
		return $this->maximumRecords;
	}

	/**
	 * Sets the maximumRecords
	 *
	 * @param integer $maximumRecords
	 * @return void
	 */
	public function setMaximumRecords($maximumRecords) {
		$this->maximumRecords = $maximumRecords;
	}

	/**
	 * Returns the contentDom
	 *
	 * @return string $contentDom
	 */
	public function getContentDom() {
		return $this->contentDom;
	}

	/**
	 * Sets the contentDom
	 *
	 * @param string $contentDom
	 * @return void
	 */
	public function setContentDom($contentDom) {
		$this->contentDom = $contentDom;
	}

	/**
	 * Returns the resource
	 *
	 * @return string $resource
	 */
	public function getResource() {
		return $this->resource;
	}

	/**
	 * Sets the resource
	 *
	 * @param string $resource
	 * @return void
	 */
	public function setResource($resource) {
		$this->resource = $resource;
	}

	/**
	 * Returns the urlMaskFilter
	 *
	 * @return string $urlMaskFilter
	 */
	public function getUrlMaskFilter() {
		return $this->urlMaskFilter;
	}

	/**
	 * Sets the urlMaskFilter
	 *
	 * @param string $urlMaskFilter
	 * @return void
	 */
	public function setUrlMaskFilter($urlMaskFilter) {
		$this->urlMaskFilter = $urlMaskFilter;
	}

	/**
	 * Returns the preferMaskFilter
	 *
	 * @return string $preferMaskFilter
	 */
	public function getPreferMaskFilter() {
		return $this->preferMaskFilter;
	}

	/**
	 * Sets the preferMaskFilter
	 *
	 * @param string $preferMaskFilter
	 * @return void
	 */
	public function setPreferMaskFilter($preferMaskFilter) {
		$this->preferMaskFilter = $preferMaskFilter;
	}

	/**
	 * Returns the verify
	 *
	 * @return string $verify
	 */
	public function getVerify() {
		return $this->verify;
	}

	/**
	 * Sets the verify
	 *
	 * @param string $verify
	 * @return void
	 */
	public function setVerify($verify) {
		$this->verify = $verify;
	}

	/**
	 * Returns the language
	 *
	 * @return string $language
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets the language
	 *
	 * @param string $language
	 * @return void
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	/**
	 * Returns the port
	 *
	 * @return integer $port
	 */
	public function getPort() {
		return $this->port;
	}

	/**
	 * Sets the port
	 *
	 * @param integer $port
	 * @return void
	 */
	public function setPort($port) {
		$this->port = $port;
	}
	
	
	/*
	 * No real reason for having this but typo3 needs it in some way
	 */
	/**
	 * Returns the port
	 *
	 */
	public function getUid() {
	}
	
	/**
	 * Sets the port
	 *
	 * @param integer $port
	 * @return void
	 */
	public function setUid($port) {
	}
	
	/**
	 * 
	 * @return integer
	 */
	public function getResultPage(){
		return $this->resultPage;
	}
	
	/**
	 * 
	 * @param integer $resultPage
	 */
	public function setResultPage($resultPage){
		$this->resultPage = $resultPage;
	}
}