<?php
    //连接数据库
    require("db_config.php");
    require("sqls.php");
    $conn = new mysqli($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);
    mysqli_query($conn,"set names utf8");

    //获取要获取的值
    $q=$_GET["q"];

    //1. 企业对云的关注度
    $concernCloudPlatform_1 = mysqli_query($conn, $sql_concernCloudPlatform_1);
    $concernCloudPlatform_2 = mysqli_query($conn, $sql_concernCloudPlatform_2);
    $concernCloudPlatform_3 = mysqli_query($conn, $sql_concernCloudPlatform_3);
    $concernCloudPlatform = array();
    while($rows = mysqli_fetch_array($concernCloudPlatform_1,MYSQLI_ASSOC))
    {
        $concernCloudPlatform[] = $rows['count(concernCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($concernCloudPlatform_2,MYSQLI_ASSOC))
    {
        $concernCloudPlatform[] = $rows['count(concernCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($concernCloudPlatform_3,MYSQLI_ASSOC))
    {
        $concernCloudPlatform[] = $rows['count(concernCloudPlatform)'];
    }
    $concernCloudPlatform1 = $concernCloudPlatform[0];
    $concernCloudPlatform2 = $concernCloudPlatform[1];
    $concernCloudPlatform3 = $concernCloudPlatform[2];
    
    //2. 企业对云平台发展的看法
    $viewCloudPlatform_1 = mysqli_query($conn, $sql_viewCloudPlatform_1);
    $viewCloudPlatform_2 = mysqli_query($conn, $sql_viewCloudPlatform_2);
    $viewCloudPlatform_3 = mysqli_query($conn, $sql_viewCloudPlatform_3);
    $viewCloudPlatform = array();
    while($rows = mysqli_fetch_array($viewCloudPlatform_1,MYSQLI_ASSOC))
    {
        $viewCloudPlatform[] = $rows['count(viewCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($viewCloudPlatform_2,MYSQLI_ASSOC))
    {
        $viewCloudPlatform[] = $rows['count(viewCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($viewCloudPlatform_3,MYSQLI_ASSOC))
    {
        $viewCloudPlatform[] = $rows['count(viewCloudPlatform)'];
    }
    $viewCloudPlatform1 = $viewCloudPlatform[0];
    $viewCloudPlatform2 = $viewCloudPlatform[1];
    $viewCloudPlatform3 = $viewCloudPlatform[2];
    
    //3. 企业云平台发展程度
    $developmentLevelCloudPlatform_1 = mysqli_query($conn, $sql_developmentLevelCloudPlatform_1);
    $developmentLevelCloudPlatform_2 = mysqli_query($conn, $sql_developmentLevelCloudPlatform_2);
    $developmentLevelCloudPlatform_3 = mysqli_query($conn, $sql_developmentLevelCloudPlatform_3);
    $developmentLevelCloudPlatform_4 = mysqli_query($conn, $sql_developmentLevelCloudPlatform_4);
    $developmentLevelCloudPlatform = array();
    while($rows = mysqli_fetch_array($developmentLevelCloudPlatform_1,MYSQLI_ASSOC))
    {
        $developmentLevelCloudPlatform[] = $rows['count(developmentLevelCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($developmentLevelCloudPlatform_2,MYSQLI_ASSOC))
    {
        $developmentLevelCloudPlatform[] = $rows['count(developmentLevelCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($developmentLevelCloudPlatform_3,MYSQLI_ASSOC))
    {
        $developmentLevelCloudPlatform[] = $rows['count(developmentLevelCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($developmentLevelCloudPlatform_4,MYSQLI_ASSOC))
    {
        $developmentLevelCloudPlatform[] = $rows['count(developmentLevelCloudPlatform)'];
    }
    $developmentLevelCloudPlatform1 = $developmentLevelCloudPlatform[0];
    $developmentLevelCloudPlatform2 = $developmentLevelCloudPlatform[1];
    $developmentLevelCloudPlatform3 = $developmentLevelCloudPlatform[2];
    $developmentLevelCloudPlatform4 = $developmentLevelCloudPlatform[3];
    
    //4. 是否存在大量的潜在客户
    $whetherPotentialUser_1 = mysqli_query($conn, $sql_whetherPotentialUser_1);
    $whetherPotentialUser_2 = mysqli_query($conn, $sql_whetherPotentialUser_2);
    $whetherPotentialUser_3 = mysqli_query($conn, $sql_whetherPotentialUser_3);
    $whetherPotentialUser = array();
    while($rows = mysqli_fetch_array($whetherPotentialUser_1,MYSQLI_ASSOC))
    {
        $whetherPotentialUser[] = $rows['count(whetherPotentialUser)'];
    }
    while($rows = mysqli_fetch_array($whetherPotentialUser_2,MYSQLI_ASSOC))
    {
        $whetherPotentialUser[] = $rows['count(whetherPotentialUser)'];
    }
    while($rows = mysqli_fetch_array($whetherPotentialUser_3,MYSQLI_ASSOC))
    {
        $whetherPotentialUser[] = $rows['count(whetherPotentialUser)'];
    }
    $whetherPotentialUser1 = $whetherPotentialUser[0];
    $whetherPotentialUser2 = $whetherPotentialUser[1];
    $whetherPotentialUser3 = $whetherPotentialUser[2];

    //5. 运营模式
    $expectedBusinessModel_1 = mysqli_query($conn, $sql_expectedBusinessModel_1);
    $expectedBusinessModel_2 = mysqli_query($conn, $sql_expectedBusinessModel_2);
    $expectedBusinessModel_3 = mysqli_query($conn, $sql_expectedBusinessModel_3);
    $expectedBusinessModel_4 = mysqli_query($conn, $sql_expectedBusinessModel_4);
    $expectedBusinessModel = array();
    while($rows = mysqli_fetch_array($expectedBusinessModel_1,MYSQLI_ASSOC))
    {
        $expectedBusinessModel[] = $rows['count(expectedBusinessModel)'];
    }
    while($rows = mysqli_fetch_array($expectedBusinessModel_2,MYSQLI_ASSOC))
    {
        $expectedBusinessModel[] = $rows['count(expectedBusinessModel)'];
    }
    while($rows = mysqli_fetch_array($expectedBusinessModel_3,MYSQLI_ASSOC))
    {
        $expectedBusinessModel[] = $rows['count(expectedBusinessModel)'];
    }
    while($rows = mysqli_fetch_array($expectedBusinessModel_4,MYSQLI_ASSOC))
    {
        $expectedBusinessModel[] = $rows['count(expectedBusinessModel)'];
    }
    $expectedBusinessModel1 = $expectedBusinessModel[0];
    $expectedBusinessModel2 = $expectedBusinessModel[1];
    $expectedBusinessModel3 = $expectedBusinessModel[2];
    $expectedBusinessModel4 = $expectedBusinessModel[3];
    
    //6. 采用类型
    $typeDeployCloud_1 = mysqli_query($conn, $sql_typeDeployCloud_1);
    $typeDeployCloud_2 = mysqli_query($conn, $sql_typeDeployCloud_2);
    $typeDeployCloud_3 = mysqli_query($conn, $sql_typeDeployCloud_3);
    $typeDeployCloud_4 = mysqli_query($conn, $sql_typeDeployCloud_4);
    $typeDeployCloud = array();
    while($rows = mysqli_fetch_array($typeDeployCloud_1,MYSQLI_ASSOC))
    {
        $typeDeployCloud[] = $rows['count(typeDeployCloud)'];
    }
    while($rows = mysqli_fetch_array($typeDeployCloud_2,MYSQLI_ASSOC))
    {
        $typeDeployCloud[] = $rows['count(typeDeployCloud)'];
    }
    while($rows = mysqli_fetch_array($typeDeployCloud_3,MYSQLI_ASSOC))
    {
        $typeDeployCloud[] = $rows['count(typeDeployCloud)'];
    }
    while($rows = mysqli_fetch_array($typeDeployCloud_4,MYSQLI_ASSOC))
    {
        $typeDeployCloud[] = $rows['count(typeDeployCloud)'];
    }
    $typeDeployCloud1 = $typeDeployCloud[0];
    $typeDeployCloud2 = $typeDeployCloud[1];
    $typeDeployCloud3 = $typeDeployCloud[2];
    $typeDeployCloud4 = $typeDeployCloud[3];
    
    //7. 使用公共云服务平台
    $usingPublicCloudServicePlatform_1 = mysqli_query($conn, $sql_usingPublicCloudServicePlatform_1);
    $usingPublicCloudServicePlatform_2 = mysqli_query($conn, $sql_usingPublicCloudServicePlatform_2);
    $usingPublicCloudServicePlatform_3 = mysqli_query($conn, $sql_usingPublicCloudServicePlatform_3);
    $usingPublicCloudServicePlatform = array();
    while($rows = mysqli_fetch_array($usingPublicCloudServicePlatform_1,MYSQLI_ASSOC))
    {
        $usingPublicCloudServicePlatform[] = $rows['count(usingPublicCloudServicePlatform)'];
    }
    while($rows = mysqli_fetch_array($usingPublicCloudServicePlatform_2,MYSQLI_ASSOC))
    {
        $usingPublicCloudServicePlatform[] = $rows['count(usingPublicCloudServicePlatform)'];
    }
    while($rows = mysqli_fetch_array($usingPublicCloudServicePlatform_3,MYSQLI_ASSOC))
    {
        $usingPublicCloudServicePlatform[] = $rows['count(usingPublicCloudServicePlatform)'];
    }
    $usingPublicCloudServicePlatform1 = $usingPublicCloudServicePlatform[0];
    $usingPublicCloudServicePlatform2 = $usingPublicCloudServicePlatform[1];
    $usingPublicCloudServicePlatform3 = $usingPublicCloudServicePlatform[2];

    //8. 迁移现有信息至云平台
    $migratingExistingInformationToCloudPlatform_1 = mysqli_query($conn, $sql_migratingExistingInformationToCloudPlatform_1);
    $migratingExistingInformationToCloudPlatform_2 = mysqli_query($conn, $sql_migratingExistingInformationToCloudPlatform_2);
    $migratingExistingInformationToCloudPlatform_3 = mysqli_query($conn, $sql_migratingExistingInformationToCloudPlatform_3);
    $migratingExistingInformationToCloudPlatform = array();
    while($rows = mysqli_fetch_array($migratingExistingInformationToCloudPlatform_1,MYSQLI_ASSOC))
    {
        $migratingExistingInformationToCloudPlatform[] = $rows['count(migratingExistingInformationToCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($migratingExistingInformationToCloudPlatform_2,MYSQLI_ASSOC))
    {
        $migratingExistingInformationToCloudPlatform[] = $rows['count(migratingExistingInformationToCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($migratingExistingInformationToCloudPlatform_3,MYSQLI_ASSOC))
    {
        $migratingExistingInformationToCloudPlatform[] = $rows['count(migratingExistingInformationToCloudPlatform)'];
    }
    $migratingExistingInformationToCloudPlatform1 = $migratingExistingInformationToCloudPlatform[0];
    $migratingExistingInformationToCloudPlatform2 = $migratingExistingInformationToCloudPlatform[1];
    $migratingExistingInformationToCloudPlatform3 = $migratingExistingInformationToCloudPlatform[2];

    //9. 成为云平台前期试点
    $becomePilotForCloudPlatform_1 = mysqli_query($conn, $sql_becomePilotForCloudPlatform_1);
    $becomePilotForCloudPlatform_2 = mysqli_query($conn, $sql_becomePilotForCloudPlatform_2);
    $becomePilotForCloudPlatform_3 = mysqli_query($conn, $sql_becomePilotForCloudPlatform_3);
    $becomePilotForCloudPlatform = array();
    while($rows = mysqli_fetch_array($becomePilotForCloudPlatform_1,MYSQLI_ASSOC))
    {
        $becomePilotForCloudPlatform[] = $rows['count(becomePilotForCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($becomePilotForCloudPlatform_2,MYSQLI_ASSOC))
    {
        $becomePilotForCloudPlatform[] = $rows['count(becomePilotForCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($becomePilotForCloudPlatform_3,MYSQLI_ASSOC))
    {
        $becomePilotForCloudPlatform[] = $rows['count(becomePilotForCloudPlatform)'];
    }
    $becomePilotForCloudPlatform1 = $becomePilotForCloudPlatform[0];
    $becomePilotForCloudPlatform2 = $becomePilotForCloudPlatform[1];
    $becomePilotForCloudPlatform3 = $becomePilotForCloudPlatform[2];

    //10. 支付费用
    $paymentExpense_1 = mysqli_query($conn, $sql_paymentExpense_1);
    $paymentExpense_2 = mysqli_query($conn, $sql_paymentExpense_2);
    $paymentExpense_3 = mysqli_query($conn, $sql_paymentExpense_3);
    $paymentExpense = array();
    while($rows = mysqli_fetch_array($paymentExpense_1,MYSQLI_ASSOC))
    {
        $paymentExpense[] = $rows['count(paymentExpense)'];
    }
    while($rows = mysqli_fetch_array($paymentExpense_2,MYSQLI_ASSOC))
    {
        $paymentExpense[] = $rows['count(paymentExpense)'];
    }
    while($rows = mysqli_fetch_array($paymentExpense_3,MYSQLI_ASSOC))
    {
        $paymentExpense[] = $rows['count(paymentExpense)'];
    }
    $paymentExpense1 = $paymentExpense[0];
    $paymentExpense2 = $paymentExpense[1];
    $paymentExpense3 = $paymentExpense[2];

    //11. 了解程度
    $understandingLevel_1 = mysqli_query($conn, $sql_understandingLevel_1);
    $understandingLevel_2 = mysqli_query($conn, $sql_understandingLevel_2);
    $understandingLevel_3 = mysqli_query($conn, $sql_understandingLevel_3);
    $understandingLevel = array();
    while($rows = mysqli_fetch_array($understandingLevel_1,MYSQLI_ASSOC))
    {
        $understandingLevel[] = $rows['count(understandingLevel)'];
    }
    while($rows = mysqli_fetch_array($understandingLevel_2,MYSQLI_ASSOC))
    {
        $understandingLevel[] = $rows['count(understandingLevel)'];
    }
    while($rows = mysqli_fetch_array($understandingLevel_3,MYSQLI_ASSOC))
    {
        $understandingLevel[] = $rows['count(understandingLevel)'];
    }
    $understandingLevel1 = $understandingLevel[0];
    $understandingLevel2 = $understandingLevel[1];
    $understandingLevel3 = $understandingLevel[2];

    //12. 是否有利于信息化水平
    $isConduciveToTheLevelOfInformationTechnology_1 = mysqli_query($conn, $sql_isConduciveToTheLevelOfInformationTechnology_1);
    $isConduciveToTheLevelOfInformationTechnology_2 = mysqli_query($conn, $sql_isConduciveToTheLevelOfInformationTechnology_2);
    $isConduciveToTheLevelOfInformationTechnology_3 = mysqli_query($conn, $sql_isConduciveToTheLevelOfInformationTechnology_3);
    $isConduciveToTheLevelOfInformationTechnology = array();
    while($rows = mysqli_fetch_array($isConduciveToTheLevelOfInformationTechnology_1,MYSQLI_ASSOC))
    {
        $isConduciveToTheLevelOfInformationTechnology[] = $rows['count(isConduciveToTheLevelOfInformationTechnology)'];
    }
    while($rows = mysqli_fetch_array($isConduciveToTheLevelOfInformationTechnology_2,MYSQLI_ASSOC))
    {
        $isConduciveToTheLevelOfInformationTechnology[] = $rows['count(isConduciveToTheLevelOfInformationTechnology)'];
    }
    while($rows = mysqli_fetch_array($isConduciveToTheLevelOfInformationTechnology_3,MYSQLI_ASSOC))
    {
        $isConduciveToTheLevelOfInformationTechnology[] = $rows['count(isConduciveToTheLevelOfInformationTechnology)'];
    }
    $isConduciveToTheLevelOfInformationTechnology1 = $isConduciveToTheLevelOfInformationTechnology[0];
    $isConduciveToTheLevelOfInformationTechnology2 = $isConduciveToTheLevelOfInformationTechnology[1];
    $isConduciveToTheLevelOfInformationTechnology3 = $isConduciveToTheLevelOfInformationTechnology[2];

    //13. 是否有自建的私有云平台
    $isThereSelfBuiltPrivateCloudPlatform_1 = mysqli_query($conn, $sql_isThereSelfBuiltPrivateCloudPlatform_1);
    $isThereSelfBuiltPrivateCloudPlatform_2 = mysqli_query($conn, $sql_isThereSelfBuiltPrivateCloudPlatform_2);
    $isThereSelfBuiltPrivateCloudPlatform = array();
    while($rows = mysqli_fetch_array($isThereSelfBuiltPrivateCloudPlatform_1,MYSQLI_ASSOC))
    {
        $isThereSelfBuiltPrivateCloudPlatform[] = $rows['count(isThereSelfBuiltPrivateCloudPlatform)'];
    }
    while($rows = mysqli_fetch_array($isThereSelfBuiltPrivateCloudPlatform_2,MYSQLI_ASSOC))
    {
        $isThereSelfBuiltPrivateCloudPlatform[] = $rows['count(isThereSelfBuiltPrivateCloudPlatform)'];
    }
    $isThereSelfBuiltPrivateCloudPlatform1 = $isThereSelfBuiltPrivateCloudPlatform[0];
    $isThereSelfBuiltPrivateCloudPlatform2 = $isThereSelfBuiltPrivateCloudPlatform[1];
    
    //14. 是否会产生大量信息
    $isItGoingToGenerateALotOfInformation_1 = mysqli_query($conn, $sql_isItGoingToGenerateALotOfInformation_1);
    $isItGoingToGenerateALotOfInformation_2 = mysqli_query($conn, $sql_isItGoingToGenerateALotOfInformation_2);
    $isItGoingToGenerateALotOfInformation_3 = mysqli_query($conn, $sql_isItGoingToGenerateALotOfInformation_3);
    $isItGoingToGenerateALotOfInformation = array();
    while($rows = mysqli_fetch_array($isItGoingToGenerateALotOfInformation_1,MYSQLI_ASSOC))
    {
        $isItGoingToGenerateALotOfInformation[] = $rows['count(isItGoingToGenerateALotOfInformation)'];
    }
    while($rows = mysqli_fetch_array($isItGoingToGenerateALotOfInformation_2,MYSQLI_ASSOC))
    {
        $isItGoingToGenerateALotOfInformation[] = $rows['count(isItGoingToGenerateALotOfInformation)'];
    }
    while($rows = mysqli_fetch_array($isItGoingToGenerateALotOfInformation_3,MYSQLI_ASSOC))
    {
        $isItGoingToGenerateALotOfInformation[] = $rows['count(isItGoingToGenerateALotOfInformation)'];
    }
    $isItGoingToGenerateALotOfInformation1 = $isItGoingToGenerateALotOfInformation[0];
    $isItGoingToGenerateALotOfInformation2 = $isItGoingToGenerateALotOfInformation[1];
    $isItGoingToGenerateALotOfInformation3 = $isItGoingToGenerateALotOfInformation[2];

    //判断$q的值是哪一个的名字，然后将对应的值echo
    //1. 企业对云的关注度
    if($q == "concernCloudPlatform1"){
        echo $concernCloudPlatform1;
    } elseif($q == "concernCloudPlatform2"){
        echo $concernCloudPlatform2;
    } elseif($q == "concernCloudPlatform3"){
        echo $concernCloudPlatform3;
    }
    //2. 企业对云平台发展的看法
    elseif($q == "viewCloudPlatform1"){
        echo $viewCloudPlatform1;
    } elseif($q == "viewCloudPlatform2"){
        echo $viewCloudPlatform2;
    } elseif($q == "viewCloudPlatform3"){
        echo $viewCloudPlatform3;
    } 
    //3. 企业云平台发展程度
    elseif($q == "developmentLevelCloudPlatform1"){
        echo $developmentLevelCloudPlatform1;
    } elseif($q == "developmentLevelCloudPlatform2"){
        echo $developmentLevelCloudPlatform2;
    } elseif($q == "developmentLevelCloudPlatform3"){
        echo $developmentLevelCloudPlatform3;
    } elseif($q == "developmentLevelCloudPlatform4"){
        echo $developmentLevelCloudPlatform4;
    } 
    //4. 是否存在大量的潜在客户
    elseif($q == "whetherPotentialUser1"){
        echo $whetherPotentialUser1;
    } elseif($q == "whetherPotentialUser2"){
        echo $whetherPotentialUser2;
    } elseif($q == "whetherPotentialUser3"){
        echo $whetherPotentialUser3;
    } 
    //5. 运营模式
    elseif($q == "expectedBusinessModel1"){
        echo $expectedBusinessModel1;
    } elseif($q == "expectedBusinessModel2"){
        echo $expectedBusinessModel2;
    } elseif($q == "expectedBusinessModel3"){
        echo $expectedBusinessModel3;
    } elseif($q == "expectedBusinessModel4"){
        echo $expectedBusinessModel4;
    } 
    //6. 采用类型
    elseif($q == "typeDeployCloud1"){
        echo $typeDeployCloud1;
    } elseif($q == "typeDeployCloud2"){
        echo $typeDeployCloud2;
    } elseif($q == "typeDeployCloud3"){
        echo $typeDeployCloud3;
    } elseif($q == "typeDeployCloud4"){
        echo $typeDeployCloud4;
    } 
    //7. 使用公共云服务平台
    elseif($q == "usingPublicCloudServicePlatform1"){
        echo $usingPublicCloudServicePlatform1;
    } elseif($q == "usingPublicCloudServicePlatform2"){
        echo $usingPublicCloudServicePlatform2;
    } elseif($q == "usingPublicCloudServicePlatform3"){
        echo $usingPublicCloudServicePlatform3;
    } 
    //8. 迁移现有信息至云平台
    elseif($q == "migratingExistingInformationToCloudPlatform1"){
        echo $migratingExistingInformationToCloudPlatform1;
    } elseif($q == "migratingExistingInformationToCloudPlatform2"){
        echo $migratingExistingInformationToCloudPlatform2;
    } elseif($q == "migratingExistingInformationToCloudPlatform3"){
        echo $migratingExistingInformationToCloudPlatform3;
    } 
    //9. 成为云平台前期试点
    elseif($q == "becomePilotForCloudPlatform1"){
        echo $becomePilotForCloudPlatform1;
    } elseif($q == "becomePilotForCloudPlatform2"){
        echo $becomePilotForCloudPlatform2;
    } elseif($q == "becomePilotForCloudPlatform3"){
        echo $becomePilotForCloudPlatform3;
    } 
    //10. 支付费用
    elseif($q == "paymentExpense1"){
        echo $paymentExpense1;
    } elseif($q == "paymentExpense2"){
        echo $paymentExpense2;
    } elseif($q == "paymentExpense3"){
        echo $paymentExpense3;
    } 
    //11. 了解程度
    elseif($q == "understandingLevel1"){
        echo $understandingLevel1;
    } elseif($q == "understandingLevel2"){
        echo $understandingLevel2;
    } elseif($q == "understandingLevel3"){
        echo $understandingLevel3;
    } 
    //12. 是否有利于信息化水平
    elseif($q == "isConduciveToTheLevelOfInformationTechnology1"){
        echo $isConduciveToTheLevelOfInformationTechnology1;
    } elseif($q == "isConduciveToTheLevelOfInformationTechnology2"){
        echo $isConduciveToTheLevelOfInformationTechnology2;
    } elseif($q == "isConduciveToTheLevelOfInformationTechnology3"){
        echo $isConduciveToTheLevelOfInformationTechnology3;
    } 
    //13. 是否有自建的私有云平台
    elseif($q == "isThereSelfBuiltPrivateCloudPlatform1"){
        echo $isThereSelfBuiltPrivateCloudPlatform1;
    } elseif($q == "isThereSelfBuiltPrivateCloudPlatform2"){
        echo $isThereSelfBuiltPrivateCloudPlatform2;
    }
    //14. 是否会产生大量信息
    elseif($q == "isItGoingToGenerateALotOfInformation1"){
        echo $isItGoingToGenerateALotOfInformation1;
    } elseif($q == "isItGoingToGenerateALotOfInformation2"){
        echo $isItGoingToGenerateALotOfInformation2;
    } elseif($q == "isItGoingToGenerateALotOfInformation3"){
        echo $isItGoingToGenerateALotOfInformation3;
    } 