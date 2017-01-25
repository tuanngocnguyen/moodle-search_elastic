<?php
namespace Aws\ApiGateway;

use Aws\AwsClient;
use Aws\CommandInterface;
use Psr\Http\Message\RequestInterface;

/**
 * This client is used to interact with the **AWS API Gateway** service.
 *
 * @method \Aws\Result createApiKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createApiKeyAsync(array $args = [])
 * @method \Aws\Result createAuthorizer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createAuthorizerAsync(array $args = [])
 * @method \Aws\Result createBasePathMapping(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createBasePathMappingAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result createDocumentationPart(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createDocumentationPartAsync(array $args = [])
 * @method \Aws\Result createDocumentationVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result createDomainName(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createDomainNameAsync(array $args = [])
 * @method \Aws\Result createModel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createModelAsync(array $args = [])
 * @method \Aws\Result createResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createResourceAsync(array $args = [])
 * @method \Aws\Result createRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createRestApiAsync(array $args = [])
 * @method \Aws\Result createStage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createStageAsync(array $args = [])
 * @method \Aws\Result createUsagePlan(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createUsagePlanAsync(array $args = [])
 * @method \Aws\Result createUsagePlanKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result deleteApiKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteApiKeyAsync(array $args = [])
 * @method \Aws\Result deleteAuthorizer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteAuthorizerAsync(array $args = [])
 * @method \Aws\Result deleteBasePathMapping(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteBasePathMappingAsync(array $args = [])
 * @method \Aws\Result deleteClientCertificate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteClientCertificateAsync(array $args = [])
 * @method \Aws\Result deleteDeployment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteDeploymentAsync(array $args = [])
 * @method \Aws\Result deleteDocumentationPart(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteDocumentationPartAsync(array $args = [])
 * @method \Aws\Result deleteDocumentationVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result deleteDomainName(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteDomainNameAsync(array $args = [])
 * @method \Aws\Result deleteIntegration(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteIntegrationAsync(array $args = [])
 * @method \Aws\Result deleteIntegrationResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result deleteMethod(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteMethodAsync(array $args = [])
 * @method \Aws\Result deleteMethodResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteMethodResponseAsync(array $args = [])
 * @method \Aws\Result deleteModel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteModelAsync(array $args = [])
 * @method \Aws\Result deleteResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteResourceAsync(array $args = [])
 * @method \Aws\Result deleteRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteRestApiAsync(array $args = [])
 * @method \Aws\Result deleteStage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteStageAsync(array $args = [])
 * @method \Aws\Result deleteUsagePlan(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteUsagePlanAsync(array $args = [])
 * @method \Aws\Result deleteUsagePlanKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result flushStageAuthorizersCache(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise flushStageAuthorizersCacheAsync(array $args = [])
 * @method \Aws\Result flushStageCache(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise flushStageCacheAsync(array $args = [])
 * @method \Aws\Result generateClientCertificate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise generateClientCertificateAsync(array $args = [])
 * @method \Aws\Result getAccount(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getAccountAsync(array $args = [])
 * @method \Aws\Result getApiKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getApiKeyAsync(array $args = [])
 * @method \Aws\Result getApiKeys(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getApiKeysAsync(array $args = [])
 * @method \Aws\Result getAuthorizer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getAuthorizerAsync(array $args = [])
 * @method \Aws\Result getAuthorizers(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getAuthorizersAsync(array $args = [])
 * @method \Aws\Result getBasePathMapping(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getBasePathMappingAsync(array $args = [])
 * @method \Aws\Result getBasePathMappings(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getBasePathMappingsAsync(array $args = [])
 * @method \Aws\Result getClientCertificate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getClientCertificateAsync(array $args = [])
 * @method \Aws\Result getClientCertificates(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getClientCertificatesAsync(array $args = [])
 * @method \Aws\Result getDeployment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDeploymentAsync(array $args = [])
 * @method \Aws\Result getDeployments(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDeploymentsAsync(array $args = [])
 * @method \Aws\Result getDocumentationPart(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDocumentationPartAsync(array $args = [])
 * @method \Aws\Result getDocumentationParts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDocumentationPartsAsync(array $args = [])
 * @method \Aws\Result getDocumentationVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result getDocumentationVersions(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDocumentationVersionsAsync(array $args = [])
 * @method \Aws\Result getDomainName(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDomainNameAsync(array $args = [])
 * @method \Aws\Result getDomainNames(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getDomainNamesAsync(array $args = [])
 * @method \Aws\Result getExport(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getExportAsync(array $args = [])
 * @method \Aws\Result getIntegration(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getIntegrationAsync(array $args = [])
 * @method \Aws\Result getIntegrationResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result getMethod(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getMethodAsync(array $args = [])
 * @method \Aws\Result getMethodResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getMethodResponseAsync(array $args = [])
 * @method \Aws\Result getModel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getModelAsync(array $args = [])
 * @method \Aws\Result getModelTemplate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getModelTemplateAsync(array $args = [])
 * @method \Aws\Result getModels(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getModelsAsync(array $args = [])
 * @method \Aws\Result getResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getResourceAsync(array $args = [])
 * @method \Aws\Result getResources(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getResourcesAsync(array $args = [])
 * @method \Aws\Result getRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getRestApiAsync(array $args = [])
 * @method \Aws\Result getRestApis(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getRestApisAsync(array $args = [])
 * @method \Aws\Result getSdk(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSdkAsync(array $args = [])
 * @method \Aws\Result getSdkType(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSdkTypeAsync(array $args = [])
 * @method \Aws\Result getSdkTypes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSdkTypesAsync(array $args = [])
 * @method \Aws\Result getStage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getStageAsync(array $args = [])
 * @method \Aws\Result getStages(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getStagesAsync(array $args = [])
 * @method \Aws\Result getUsage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getUsageAsync(array $args = [])
 * @method \Aws\Result getUsagePlan(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getUsagePlanAsync(array $args = [])
 * @method \Aws\Result getUsagePlanKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getUsagePlanKeyAsync(array $args = [])
 * @method \Aws\Result getUsagePlanKeys(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getUsagePlanKeysAsync(array $args = [])
 * @method \Aws\Result getUsagePlans(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getUsagePlansAsync(array $args = [])
 * @method \Aws\Result importApiKeys(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise importApiKeysAsync(array $args = [])
 * @method \Aws\Result importDocumentationParts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise importDocumentationPartsAsync(array $args = [])
 * @method \Aws\Result importRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise importRestApiAsync(array $args = [])
 * @method \Aws\Result putIntegration(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise putIntegrationAsync(array $args = [])
 * @method \Aws\Result putIntegrationResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise putIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result putMethod(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise putMethodAsync(array $args = [])
 * @method \Aws\Result putMethodResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise putMethodResponseAsync(array $args = [])
 * @method \Aws\Result putRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise putRestApiAsync(array $args = [])
 * @method \Aws\Result testInvokeAuthorizer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise testInvokeAuthorizerAsync(array $args = [])
 * @method \Aws\Result testInvokeMethod(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise testInvokeMethodAsync(array $args = [])
 * @method \Aws\Result updateAccount(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateAccountAsync(array $args = [])
 * @method \Aws\Result updateApiKey(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateApiKeyAsync(array $args = [])
 * @method \Aws\Result updateAuthorizer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateAuthorizerAsync(array $args = [])
 * @method \Aws\Result updateBasePathMapping(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateBasePathMappingAsync(array $args = [])
 * @method \Aws\Result updateClientCertificate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateClientCertificateAsync(array $args = [])
 * @method \Aws\Result updateDeployment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateDeploymentAsync(array $args = [])
 * @method \Aws\Result updateDocumentationPart(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateDocumentationPartAsync(array $args = [])
 * @method \Aws\Result updateDocumentationVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateDocumentationVersionAsync(array $args = [])
 * @method \Aws\Result updateDomainName(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateDomainNameAsync(array $args = [])
 * @method \Aws\Result updateIntegration(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateIntegrationAsync(array $args = [])
 * @method \Aws\Result updateIntegrationResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateIntegrationResponseAsync(array $args = [])
 * @method \Aws\Result updateMethod(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateMethodAsync(array $args = [])
 * @method \Aws\Result updateMethodResponse(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateMethodResponseAsync(array $args = [])
 * @method \Aws\Result updateModel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateModelAsync(array $args = [])
 * @method \Aws\Result updateResource(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateResourceAsync(array $args = [])
 * @method \Aws\Result updateRestApi(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateRestApiAsync(array $args = [])
 * @method \Aws\Result updateStage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateStageAsync(array $args = [])
 * @method \Aws\Result updateUsage(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateUsageAsync(array $args = [])
 * @method \Aws\Result updateUsagePlan(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateUsagePlanAsync(array $args = [])
 */
class ApiGatewayClient extends AwsClient
{
    public function __construct(array $args)
    {
        parent::__construct($args);
        $stack = $this->getHandlerList();
        $stack->appendBuild([__CLASS__, '_add_accept_header']);
    }

    public static function _add_accept_header(callable $handler)
    {
        return function (
            CommandInterface $command,
            RequestInterface $request
        ) use ($handler) {
            $request = $request->withHeader('Accept', 'application/json');

            return $handler($command, $request);
        };
    }
}