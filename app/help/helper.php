<?php
function siteSettings($value = 'id'){
	$siteSettings = \App\Setting::all()->first();
	return $siteSettings[$value];
}