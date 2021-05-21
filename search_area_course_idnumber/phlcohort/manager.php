$searchquery=array(
    'c.idnumber' => optional_param('idnumber','', PARAM_TEXT),
    'ngayhoctu'=>optional_param_array('ngayhoctu', $arrayTu, PARAM_INT),
    'ngayhocden'=>optional_param_array('ngayhocden', $arrayDen, PARAM_INT)
    //'mien' => optional_param('mien',0, PARAM_INT),
//'qh.khuvuc' => optional_param('khuvuc',0, PARAM_INT),
  //  'ch.khoahoc' => optional_param('khoahoc',0, PARAM_INT)
    
);

$searchkhuvuc = array('qh.khuvuc' => optional_param('khuvuc',0, PARAM_INT));
$searchkhoahoc = array('ch.khoahoc' => optional_param('khoahoc',0, PARAM_INT));
if ($showall) {
    $cohorts = cohort_get_all_phl_cohorts_replica($page, 25, $searchquery,$searchkhoahoc,$searchkhuvuc);
} else {
    ;//$cohorts = cohort_get_cohorts($context->id, $page, 25, $searchquery);
}
