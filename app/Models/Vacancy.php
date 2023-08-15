<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_az',
        'salary_min',
        'salary_max',
        'responsibilities_az',
        'requirements_az',
        'sharing_date',
        'duration',
        'age_limit',
        'education_level_az',
        'work_schedule_az',
        'contract_type_az',
        'application_email_az',
        'title_en',
        'responsibilities_en',
        'requirements_en',
        'education_level_en',
        'work_schedule_en',
        'contract_type_en',
        'application_email_en',
        'title_ru',
        'responsibilities_ru',
        'requirements_ru',
        'education_level_ru',
        'work_schedule_ru',
        'contract_type_ru',
        'application_email_ru',
        'status',
    ];

    public function getTitleAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("title_$language");
    }

    public function getResponsibilitiesAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("responsibilities_$language");
    }

    public function getRequirementsAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("requirements_$language");
    }

    public function getEducationAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("education_level_$language");
    }

    public function getWorkScheduleAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("work_schedule_$language");
    }

    public function getContractTypeAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("contract_type_$language");
    }

    public function getApplicationEmailAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("application_email_$language");
    }

}
