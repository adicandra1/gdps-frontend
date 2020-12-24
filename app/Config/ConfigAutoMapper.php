<?php namespace Config;

use App\Repository\DataContract\VacancyListResponse;
use App\Views\DataContract\Vacancy;
use App\Views\DataContract\VacancyDetail\AdditionalJobDescriptionContract;
use App\Views\DataContract\VacancyDetail\AdditionalJobRequirementContract;
use App\Views\DataContract\VacancyDetail\TagContract;
use AutoMapperPlus\AutoMapperInterface;
use AutoMapperPlus\Configuration\AutoMapperConfig;
use AutoMapperPlus\DataType;
use AutoMapperPlus\MappingOperation\Operation;
use DateTime;
use DateTimeZone;

class ConfigAutoMapper
{
    public static function config() : AutoMapperConfig {
        $config = new AutoMapperConfig();
        $config->getOptions()->createUnregisteredMappings();

        //Vacancy Mapping
        $config->registerMapping(DataType::ARRAY, TagContract::class);
        $config->registerMapping(DataType::ARRAY, AdditionalJobDescriptionContract::class);
        $config->registerMapping(DataType::ARRAY, AdditionalJobRequirementContract::class);
        $config->registerMapping(DataType::ARRAY, Vacancy::class)
            ->forMember('createdDate', function($source, AutoMapperInterface $mapper) {
                return new DateTime($source['createdDate']['date'], new DateTimeZone($source['createdDate']['timezone']));
            })
            ->forMember('validDate', function($source, AutoMapperInterface $mapper) {
                return new DateTime($source['validDate']['date'], new DateTimeZone($source['validDate']['timezone']));
            })
            ->forMember('tags', Operation::mapCollectionTo(TagContract::class))
            ->forMember('additionalJobRequirements', Operation::mapCollectionTo(AdditionalJobRequirementContract::class))
            ->forMember('additionalJobDescription', Operation::mapCollectionTo(AdditionalJobDescriptionContract::class));

        //VacancyListResponse Mapping
        $config->registerMapping(DataType::ARRAY, VacancyListResponse::class)
            ->forMember('vacancies', Operation::mapCollectionTo(Vacancy::class));
        return $config;
    }
}