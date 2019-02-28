<?php
abstract class FLY_controller{
	public function __construct($action){
		$action = $this->getAction();
		$this->$action();       
            case 'changePassword':
                if ($this->isPostBack())
                {
                    $this->onChangePassword();
                }
                break;

            case 'newInstallPassword':
                if ($this->isPostBack())
                {
                    $this->onNewInstallPassword();
                }
                else
                {
                    $this->newInstallPassword();
                }
                break;

            case 'forceEmail':
                if ($this->isPostBack())
                {
                    $this->onForceEmail();
                }
                else
                {
                    $this->forceEmail();
                }
                break;

            case 'newSiteName':
                if ($this->isPostBack())
                {
                    $this->onNewSiteName();
                }
                else
                {
                    $this->newSiteName();
                }
                break;

            case 'upgradeSiteName':
                if ($this->isPostBack())
                {
                    $this->onNewSiteName();
                }
                else
                {
                    $this->upgradeSiteName();
                }
                break;

            case 'newInstallFinished':
                if ($this->isPostBack())
                {
                    $this->onNewInstallFinished();
                }
                else
                {
                    $this->newInstallFinished();
                }
                break;

            case 'administration':
                if ($this->isPostBack())
                {
                    $this->onAdministration();
                }
                else
                {
                    $this->administration();
                }
                break;

            case 'manageUsers':
                $this->manageUsers();
                break;

            case 'previewPage':
                $this->previewPage();
                break;

            case 'previewPageTop':
                $this->previewPageTop();
                break;

            case 'showUser':
                $this->showUser();
                break;

            case 'addUser':
                if ($this->isPostBack())
                {
                    $this->onAddUser();
                }
                else
                {
                    $this->addUser();
                }

                break;

            case 'editUser':
                if ($this->isPostBack())
                {
                    $this->onEditUser();
                }
                else
                {
                    $this->editUser();
                }

                break;

            case 'createBackup':
                $this->createBackup();
                break;

            case 'deleteBackup':
                $this->deleteBackup();
                break;

            case 'customizeExtraFields':
                if ($this->isPostBack())
                {
                    $this->onCustomizeExtraFields();
                }
                else
                {
                    $this->customizeExtraFields();
                }
                break;

            case 'customizeDashboard':
                if ($this->isPostBack())
                {
                    $this->onCustomizeDashboard();
                }
                else
                {
                    $this->customizeDashboard();
                }
                break;

            case 'customizeCalendar':
                if ($this->isPostBack())
                {
                    $this->onCustomizeCalendar();
                }
                else
                {
                    $this->customizeCalendar();
                }
                break;

            case 'reports':
                if ($this->isPostBack())
                {

                }
                else
                {
                    $this->reports();
                }
                break;

            case 'emailSettings':
                if ($this->isPostBack())
                {
                    $this->onEmailSettings();
                }
                else
                {
                    $this->emailSettings();
                }
                break;

            case 'careerPortalTemplateEdit':
                if ($this->isPostBack())
                {
                    $this->onCareerPortalTemplateEdit();
                }
                else
                {
                    $this->careerPortalTemplateEdit();
                }
                break;

            case 'careerPortalSettings':
                if ($this->isPostBack())
                {
                    $this->onCareerPortalSettings();
                }
                else
                {
                    $this->careerPortalSettings();
                }
                break;

            case 'eeo':
                if ($this->isPostBack())
                {
                    $this->onEEOEOCSettings();
                }
                else
                {
                    $this->EEOEOCSettings();
                }
                break;

            case 'onCareerPortalTweak':
                $this->onCareerPortalTweak();
                break;

            /* This really only exists for automated testing at this point. */
            case 'deleteUser':
                $this->onDeleteUser();
                break;

            case 'emailTemplates':
                if ($this->isPostBack())
                {
                    $this->onEmailTemplates();
                }
                else
                {
                    $this->emailTemplates();
                }
                break;

           case 'aspLocalization':
                if ($this->isPostBack())
                {
                    $this->onAspLocalization();
                }
                break;

           case 'loginActivity':
                include_once('./lib/BrowserDetection.php');

                $this->loginActivity();
                break;

            case 'viewItemHistory':
                $this->viewItemHistory();
                break;

            /* Main settings page. */
            case 'myProfile':
            default:
                $this->myProfile();
                break;
        }
	}
}
