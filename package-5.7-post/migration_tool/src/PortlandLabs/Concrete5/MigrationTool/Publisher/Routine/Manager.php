<?php

namespace PortlandLabs\Concrete5\MigrationTool\Publisher\Routine;

use Concrete\Core\Support\Manager as CoreManager;

defined('C5_EXECUTE') or die("Access Denied.");

class Manager extends CoreManager
{

    public function createCreatePageTemplatesDriver()
    {
        return new CreatePageTemplatesRoutine();
    }

    public function createCreateBlockTypesDriver()
    {
        return new CreateBlockTypesRoutine();
    }

    public function createClearBatchDriver()
    {
        return new ClearBatchRoutine();
    }

    public function createPublishPageContentDriver()
    {
        return new PublishPageContentRoutine();
    }

    public function createCreatePageStructureDriver()
    {
        return new CreatePageStructureRoutine();
    }

    public function createCreateSinglePageStructureDriver()
    {
        return new CreateSinglePageStructureRoutine();
    }

    public function createCreateConversationDataDriver()
    {
        return new CreateConversationDataRoutine();
    }

    public function createCreateAttributeCategoriesDriver()
    {
        return new CreateAttributeCategoriesRoutine();
    }

    public function createCreateAttributeTypesDriver()
    {
        return new CreateAttributeTypesRoutine();
    }

    public function createCreateThumbnailTypesDriver()
    {
        return new CreateThumbnailTypesRoutine();
    }

    public function createCreateBlockTypeSetsDriver()
    {
        return new CreateBlockTypeSetsRoutine();
    }

    public function createCreatePageTypePublishTargetTypesDriver()
    {
        return new CreatePageTypePublishTargetTypesRoutine();
    }


    public function createCreatePageTypeComposerControlTypesDriver()
    {
        return new CreatePageTypeComposerControlTypesRoutine();
    }

    public function createCreateWorkflowTypesDriver()
    {
        return new CreateWorkflowTypesRoutine();
    }

    public function createCreateWorkflowProgressCategoriesDriver()
    {
        return new CreateWorkflowProgressCategoriesRoutine();
    }

    public function createCreateSocialLinksDriver()
    {
        return new CreateSocialLinksRoutine();
    }

    public function createCreateCaptchaLibrariesDriver()
    {
        return new CreateCaptchaLibrariesRoutine();
    }

    public function createCreateThemesDriver()
    {
        return new CreateThemesRoutine();
    }

    public function createCreateBannedWordsDriver()
    {
        return new CreateBannedWordsRoutine();
    }

    public function createCreatePermissionAccessEntityTypesDriver()
    {
        return new CreatePermissionCategoriesRoutine();
    }

    public function createCreatePermissionCategoriesDriver()
    {
        return new CreatePermissionAccessEntityTypesRoutine();
    }

    public function createCreateJobsDriver()
    {
        return new CreateJobsRoutine();
    }

    public function createCreateJobSetsDriver()
    {
        return new CreateJobSetsRoutine();
    }

    public function createCreateConfigValuesDriver()
    {
        return new CreateConfigValuesRoutine();
    }

    public function createPageFeedsDriver()
    {
        return new CreatePageFeedsRoutine();
    }

    public function createAttributeSetsDriver()
    {
        return new CreateAttributeSetsRoutine();
    }

    public function createContentEditorSnippetsDriver()
    {
        return new CreateContentEditorSnippetsRoutine();
    }

    public function createPackagesDriver()
    {
        return new CreatePackagesRoutine();
    }

    public function __construct()
    {
        $this->driver('clear_batch');
        $this->driver('create_workflow_types');
        $this->driver('create_content_editor_snippets');
        $this->driver('create_workflow_progress_categories');
        $this->driver('create_banned_words');
        $this->driver('create_config_values');
        $this->driver('create_captcha_libraries');
        $this->driver('create_themes');
        $this->driver('create_social_links');
        $this->driver('create_thumbnail_types');
        $this->driver('create_jobs');
        $this->driver('create_job_sets');
        $this->driver('create_packages');
        $this->driver('create_page_type_publish_target_types');
        $this->driver('create_page_type_composer_control_types');
        $this->driver('create_conversation_data');
        $this->driver('create_permission_categories');
        $this->driver('create_permission_access_entity_types');
        $this->driver('create_attribute_types');
        $this->driver('create_attribute_categories');
        $this->driver('create_attribute_sets');
        $this->driver('create_block_types');
        $this->driver('create_block_type_sets');
        $this->driver('create_single_page_structure');
        $this->driver('create_page_templates');
        $this->driver('create_page_structure');
        $this->driver('create_page_feeds');
        $this->driver('publish_page_content');
    }
}
