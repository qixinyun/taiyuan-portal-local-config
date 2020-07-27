<?php
namespace SrcConfig\News\Model;

use News\Model\NewsCategory;
use News\Model\NullNewsCategory;

class CategoryModelFactory
{
    const  NEWS_PARENT_CATEGORY_CN = array(
        0 => '无',
        1 => '信用动态',
        2 => '联合奖惩'
    );

    const NEWS_PARENT_CATEGORY = array(
        'NULL' => 0,
        'CREDIT_DYNAMICS' => 1,
        'DISCIPLINARY' => 2,
    );

    const  NEWS_CATEGORY_CN = array(
        '1'=>'组织架构',
        '2'=>'政策法规',
        '3'=>'标准规范',
        '4'=>'通知公告',
        '5'=>'工作动态',
        '6'=>'信用新闻',
        '7'=>'信用建设',
        '8'=>'信用研究',
        '9'=>'联合奖惩备忘录',
        '10'=>'联合奖惩动态',
        '11'=>'联合奖惩案例',
        '12'=>'信用监管',
        '13'=>'守信激励与失信惩戒',
        '14'=>'诚信建设万里行',
        '15'=>'信易+',
    );

    const NEWS_CATEGORY = array(
        'ORGANIZATIONAL_STRUCTURE' => 1,
        'POLICY_STATUTE' => 2,
        'STANDARD_SPECIFICATION' => 3,
        'NOTICE_ANNOUNCEMENT' => 4,
        'WORK_DYNAMICS' => 5,
        'CREDIT_NEWS' => 6,
        'CREDIT_CONSTRUCTION' => 7,
        'CREDIT_RESEARCH' => 8,
        'DISCIPLINARY_MEMORANDUM' => 9,
        'DISCIPLINARY_DYNAMICS' => 10,
        'DISCIPLINARY_CASE' => 11,
        'SUPERVISION' => 12,
        'TRUSTWORTHINESS_DISHONESTY' => 13,
        'HONESTY_CONSTRUCTION' => 14,
        'RELAXED_TRUSTWORTHY' => 15,
    );

    const  NEWS_TYPE_CN = array(
        1 => '领导小组',
        2 => '信用办',
        3 => '公示文件',
        4 => '信用窗口',
        5 => '国家级政策法规',
        6 => '省级政策法规',
        7 => '市级政策法规',
        8 => '综合性标准规范',
        9 => '行业性标准规范',
        10 => '地方标准规范',
        11 => '国家级通知公告',
        12 => '省级通知公告',
        13 => '市级通知公告',
        14 => '国家级工作动态',
        15 => '省级工作动态',
        16 => '市级工作动态',
        17 => '国家级信用新闻',
        18 => '省级信用新闻',
        19 => '市级信用新闻',
        20 => '国家级信用建设',
        21 => '省级信用建设',
        22 => '市级信用建设',
        23 => '信用知识',
        24 => '国家级信用研究',
        25 => '省级信用研究',
        26 => '市级信用研究',
        27 => '联合奖惩备忘录',
        28 => '联合奖惩动态',
        29 => '部门监管',
        30 => '媒体监管',
        31 => '行业监管',
        32 => '政务诚信联合奖惩案例',
        33 => '商务诚信联合奖惩案例',
        34 => '司法公信联合奖惩案例',
        35 => '社会诚信联合奖惩案例',
        36 => '守信信息守信激励与失信惩戒',
        37 => '安全事故守信激励与失信惩戒',
        38 => '不良现象守信激励与失信惩戒',
        39 => '信用承诺',
        40 => '典型案例',
        41 => '失信专项治理',
        42 => 'xx在行动',
        43 => '凡人善举树典型',
        44 => '信易批',
        45 => '信易贷',
        46 => '信易租',
        47 => '信易游',
        48 => '信易行',
        49 => '重要信息提示及重大事件追踪模块'
    );

    const NEWS_TYPE = array(
        'LEADING_GROUP' => 1,
        'CREDIT_OFFICE' => 2,
        'PUBLIC_DOCUMENT' => 3,
        'CREDIT_WINDOW' => 4,
        'COUNTRY_POLICY_STATUTE' => 5,
        'PROVINCE_POLICY_STATUTE' => 6,
        'CITY_POLICY_STATUTE' => 7,
        'COUNTRY_STANDARD_SPECIFICATION' => 8,
        'PROVINCE_STANDARD_SPECIFICATION' => 9,
        'CITY_STANDARD_SPECIFICATION' => 10,
        'COUNTRY_NOTICE_ANNOUNCEMENT' => 11,
        'PROVINCE_NOTICE_ANNOUNCEMENT' => 12,
        'CITY_NOTICE_ANNOUNCEMENT' => 13,
        'COUNTRY_WORK_DYNAMICS' => 14,
        'PROVINCE_WORK_DYNAMICS' => 15,
        'CITY_WORK_DYNAMICS' => 16,
        'COUNTRY_CREDIT_NEWS' => 17,
        'PROVINCE_CREDIT_NEWS' => 18,
        'CITY_CREDIT_NEWS' => 19,
        'COUNTRY_CREDIT_CONSTRUCTION' => 20,
        'PROVINCE_CREDIT_CONSTRUCTION' => 21,
        'CITY_CREDIT_CONSTRUCTION' => 22,
        'CREDIT_KNOWLEDGE' => 23,
        'COUNTRY_CREDIT_RESEARCH' => 24,
        'PROVINCE_CREDIT_RESEARCH' => 25,
        'CITY_CREDIT_RESEARCH' => 26,
        'DISCIPLINARY_MEMORANDUM' => 27,
        'DISCIPLINARY_DYNAMICS' => 28,
        'DEPARTMENTAL_SUPERVISION' => 29,
        'MEDIA_SUPERVISION' => 30,
        'INDUSTRY_SUPERVISION' => 31,
        'GOVERNMENT_INTEGRITY' => 32,
        'BUSINESS_INTEGRITY' => 33,
        'JUDICIAL_PUBLIC_TRUST' => 34,
        'SOCIAL_INTEGRITY' => 35,
        'TRUSTWORTHY_INFORMATION' => 36,
        'SAFETY_ACCIDENT' => 37,
        'BAD_PHENOMENON' => 38,
        'PROMISE' => 39,
        'CLASSIC_CASE'=>40,
        'SPECIAL_GOVERN'=>41,
        'PINGXIANG_IN_ACTION'=>42,
        'TYPICAL_ACT_OF_KINDNESS'=>43,
        'RELAXED_TRUSTWORTHY_APPROVAl'=>44,
        'RELAXED_TRUSTWORTHY_LOAN'=>45,
        'RELAXED_TRUSTWORTHY_LEASE'=>46,
        'RELAXED_TRUSTWORTHY_TOURISM'=>47,
        'RELAXED_TRUSTWORTHY_KINDNESS'=>48,
        'IMPORTANT_TIPS_EVENTS_TRACKING' => 49
    );

    public static function create(int $id, $type) : NewsCategory
    {
        switch ($type) {
            case TYPE['NEWS_TYPE_CN']:
                $type = self::NEWS_TYPE_CN;
                break;
            case TYPE['NEWS_CATEGORY_CN']:
                $type = self::NEWS_CATEGORY_CN;
                break;
            case TYPE['NEWS_PARENT_CATEGORY_CN']:
                $type = self::NEWS_PARENT_CATEGORY_CN;
                break;
        }

        return in_array($id, array_keys($type))
            ? new NewsCategory($id, $type[$id])
            : new NullNewsCategory(0, '');
    }
}
