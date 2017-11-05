<?php
//1. 企业对云的关注度
$sql_concernCloudPlatform_1 = "select count(concernCloudPlatform)
from cloudplatform
where concernCloudPlatform = 1";
$sql_concernCloudPlatform_2 = "select count(concernCloudPlatform)
from cloudplatform
where concernCloudPlatform = 2";
$sql_concernCloudPlatform_3 = "select count(concernCloudPlatform)
from cloudplatform
where concernCloudPlatform = 3";

//2. 企业对云平台发展的看法
$sql_viewCloudPlatform_1 = "select count(viewCloudPlatform)
from cloudplatform
where viewCloudPlatform = 1";
$sql_viewCloudPlatform_2 = "select count(viewCloudPlatform)
from cloudplatform
where viewCloudPlatform = 2";
$sql_viewCloudPlatform_3 = "select count(viewCloudPlatform)
from cloudplatform
where viewCloudPlatform = 3";

//3. 企业云平台发展程度
$sql_developmentLevelCloudPlatform_1 = "select count(developmentLevelCloudPlatform)
from cloudplatform
where developmentLevelCloudPlatform = 1";
$sql_developmentLevelCloudPlatform_2 = "select count(developmentLevelCloudPlatform)
from cloudplatform
where developmentLevelCloudPlatform = 2";
$sql_developmentLevelCloudPlatform_3 = "select count(developmentLevelCloudPlatform)
from cloudplatform
where developmentLevelCloudPlatform = 3";
$sql_developmentLevelCloudPlatform_4 = "select count(developmentLevelCloudPlatform)
from cloudplatform
where developmentLevelCloudPlatform = 4";

//4. 是否存在大量的潜在客户
$sql_whetherPotentialUser_1 = "select count(whetherPotentialUser)
from cloudplatform
where whetherPotentialUser = 1";
$sql_whetherPotentialUser_2 = "select count(whetherPotentialUser)
from cloudplatform
where whetherPotentialUser = 2";
$sql_whetherPotentialUser_3 = "select count(whetherPotentialUser)
from cloudplatform
where whetherPotentialUser = 3";

//5. 运营模式
$sql_expectedBusinessModel_1 = "select count(expectedBusinessModel)
from cloudplatform
where expectedBusinessModel = 1";
$sql_expectedBusinessModel_2 = "select count(expectedBusinessModel)
from cloudplatform
where expectedBusinessModel = 2";
$sql_expectedBusinessModel_3 = "select count(expectedBusinessModel)
from cloudplatform
where expectedBusinessModel = 3";
$sql_expectedBusinessModel_4 = "select count(expectedBusinessModel)
from cloudplatform
where expectedBusinessModel = 4";

//6. 采用类型
$sql_typeDeployCloud_1 = "select count(typeDeployCloud)
from cloudplatform
where typeDeployCloud = 1";
$sql_typeDeployCloud_2 = "select count(typeDeployCloud)
from cloudplatform
where typeDeployCloud = 2";
$sql_typeDeployCloud_3 = "select count(typeDeployCloud)
from cloudplatform
where typeDeployCloud = 3";
$sql_typeDeployCloud_4 = "select count(typeDeployCloud)
from cloudplatform
where typeDeployCloud = 4";

//对云的意向
//7. 使用公共云服务平台
$sql_usingPublicCloudServicePlatform_1 = "select count(usingPublicCloudServicePlatform)
from cloudplatform
where usingPublicCloudServicePlatform = 1";
$sql_usingPublicCloudServicePlatform_2 = "select count(usingPublicCloudServicePlatform)
from cloudplatform
where usingPublicCloudServicePlatform = 2";
$sql_usingPublicCloudServicePlatform_3 = "select count(usingPublicCloudServicePlatform)
from cloudplatform
where usingPublicCloudServicePlatform = 3";

//8. 迁移现有信息至云平台
$sql_migratingExistingInformationToCloudPlatform_1 = "select count(migratingExistingInformationToCloudPlatform)
from cloudplatform
where migratingExistingInformationToCloudPlatform = 1";
$sql_migratingExistingInformationToCloudPlatform_2 = "select count(migratingExistingInformationToCloudPlatform)
from cloudplatform
where migratingExistingInformationToCloudPlatform = 2";
$sql_migratingExistingInformationToCloudPlatform_3 = "select count(migratingExistingInformationToCloudPlatform)
from cloudplatform
where migratingExistingInformationToCloudPlatform = 3";

//9. 成为云平台前期试点
$sql_becomePilotForCloudPlatform_1 = "select count(becomePilotForCloudPlatform)
from cloudplatform
where becomePilotForCloudPlatform = 1";
$sql_becomePilotForCloudPlatform_2 = "select count(becomePilotForCloudPlatform)
from cloudplatform
where becomePilotForCloudPlatform = 2";
$sql_becomePilotForCloudPlatform_3 = "select count(becomePilotForCloudPlatform)
from cloudplatform
where becomePilotForCloudPlatform = 3";

//10. 支付费用
$sql_paymentExpense_1 = "select count(paymentExpense)
from cloudplatform
where paymentExpense = 1";
$sql_paymentExpense_2 = "select count(paymentExpense)
from cloudplatform
where paymentExpense = 2";
$sql_paymentExpense_3 = "select count(paymentExpense)
from cloudplatform
where paymentExpense = 3";

//11. 了解程度
$sql_understandingLevel_1 = "select count(understandingLevel)
from cloudplatform
where understandingLevel = 1";
$sql_understandingLevel_2 = "select count(understandingLevel)
from cloudplatform
where understandingLevel = 2";
$sql_understandingLevel_3 = "select count(understandingLevel)
from cloudplatform
where understandingLevel = 3";

//12. 是否有利于信息化水平
$sql_isConduciveToTheLevelOfInformationTechnology_1 = "select count(isConduciveToTheLevelOfInformationTechnology)
from cloudplatform
where isConduciveToTheLevelOfInformationTechnology = 1";
$sql_isConduciveToTheLevelOfInformationTechnology_2 = "select count(isConduciveToTheLevelOfInformationTechnology)
from cloudplatform
where isConduciveToTheLevelOfInformationTechnology = 2";
$sql_isConduciveToTheLevelOfInformationTechnology_3 = "select count(isConduciveToTheLevelOfInformationTechnology)
from cloudplatform
where isConduciveToTheLevelOfInformationTechnology = 3";

//13. 是否有自建的私有云平台
$sql_isThereSelfBuiltPrivateCloudPlatform_1 = "select count(isThereSelfBuiltPrivateCloudPlatform)
from cloudplatform
where isThereSelfBuiltPrivateCloudPlatform = 1";
$sql_isThereSelfBuiltPrivateCloudPlatform_2 = "select count(isThereSelfBuiltPrivateCloudPlatform)
from cloudplatform
where isThereSelfBuiltPrivateCloudPlatform = 2";

//14. 是否会产生大量信息
$sql_isItGoingToGenerateALotOfInformation_1 = "select count(isItGoingToGenerateALotOfInformation)
from cloudplatform
where isItGoingToGenerateALotOfInformation = 1";
$sql_isItGoingToGenerateALotOfInformation_2 = "select count(isItGoingToGenerateALotOfInformation)
from cloudplatform
where isItGoingToGenerateALotOfInformation = 2";
$sql_isItGoingToGenerateALotOfInformation_3 = "select count(isItGoingToGenerateALotOfInformation)
from cloudplatform
where isItGoingToGenerateALotOfInformation = 3";