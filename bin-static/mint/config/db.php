<?php
/******************************************************************************
 Mint
  
 Copyright 2004-2007 Shaun Inman. This code cannot be redistributed without
 permission from http://www.shauninman.com/
 
 More info at: http://www.haveamint.com/
 
 ******************************************************************************
 Configuration
 ******************************************************************************/
 if (!defined('MINT')) { header('Location:/'); } // Prevent viewing this file 

$Mint = new Mint (array
(	
	'server'	=> 'internal-db.s54386.gridserver.com',
	'username'	=> 'db54386',
	//'password'	=> 'kwR68meh',
	'password'	=> 'Krypton1te',
	'database'	=> 'db54386_danielmall',
	'tblPrefix'	=> 'mint_'
));