<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // Eloquent::unguard();

        // first seed all base tables
        $this->call([
            BenefitsTableSeeder::class,
            CareersTableSeeder::class,
            ContentPagesTableSeeder::class,
            DepartmentsTableSeeder::class,
            DocsTableSeeder::class,
            DocTypesTableSeeder::class,
            EducationTableSeeder::class,
            EmploymentTypesTableSeeder::class,
            FaqCategoriesTableSeeder::class,
            FaqQuestionsTableSeeder::class,
            FeaturesTableSeeder::class,
            FirmwareTableSeeder::class,
            IndustriesTableSeeder::class,
            JobSkillsTableSeeder::class,
            LessonsTableSeeder::class,
            MediaTableSeeder::class,
            NewsTableSeeder::class,
            PaytypesTableSeeder::class,
            PermissionsTableSeeder::class,
            PostsTableSeeder::class,
            ProductCategoriesTableSeeder::class,
            ProductModelsTableSeeder::class,
            ProductQrTableSeeder::class,
            ProductSectionsTableSeeder::class,
            ProductsTableSeeder::class,
            QaMessagesTableSeeder::class,
            QaTopicsTableSeeder::class,
            QrFeaturesTableSeeder::class,
            QrsTableSeeder::class,
            RegionsTableSeeder::class,
            RolesTableSeeder::class,
            SoftwareTableSeeder::class,
            StaffTableSeeder::class,
            StaffVideosTableSeeder::class,
            StatusesTableSeeder::class,
            UsersTableSeeder::class,

        ]);

        // Second seed all realationship tables.

        $this->call(BenefitCareerTableSeeder::class);
        $this->call(CareerCategoriesTableSeeder::class);
        $this->call(CareerEducationTableSeeder::class);
        $this->call(CareerEmploymentTypeTableSeeder::class);
        $this->call(CareerJobSkillTableSeeder::class);
        $this->call(CareerLocationTableSeeder::class);
        $this->call(CareerPaytypeTableSeeder::class);
        $this->call(CareerQualificationTableSeeder::class);
        $this->call(ContentCategoriesTableSeeder::class);
        $this->call(ContentCategoryContentPageTableSeeder::class);
        $this->call(ContentCategoryNewsTableSeeder::class);
        $this->call(ContentCategoryPostTableSeeder::class);
        $this->call(ContentPageContentTagTableSeeder::class);
        $this->call(ContentSectionsTableSeeder::class);
        $this->call(ContentTagNewsTableSeeder::class);
        $this->call(ContentTagPostTableSeeder::class);
        $this->call(ContentTagsTableSeeder::class);
        $this->call(DepartmentStaffTableSeeder::class);
        $this->call(DocDocTypeTableSeeder::class);
        $this->call(DocProductCategoryTableSeeder::class);
        $this->call(DocProductTableSeeder::class);
        $this->call(FaqQuestionProductTableSeeder::class);
        $this->call(FeatureProductTableSeeder::class);
        $this->call(FirmwareProductTableSeeder::class);
        $this->call(LessonProductTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(NewsProductTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PostProductTableSeeder::class);
        $this->call(ProductCategorySoftwareTableSeeder::class);
        $this->call(ProductProductCategoryTableSeeder::class);
        $this->call(ProductProductModelTableSeeder::class);
        $this->call(ProductProductTagTableSeeder::class);
        $this->call(ProductSoftwareTableSeeder::class);
        $this->call(ProductTagsTableSeeder::class);
        $this->call(ProductTestimonialTableSeeder::class);
        $this->call(QrFeatureCategoriesTableSeeder::class);
        $this->call(QrFeatureQrFeatureCategoryTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(RegionStaffTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(StaffCategoriesTableSeeder::class);
        $this->call(StaffStaffCategoryTableSeeder::class);
        $this->call(StaffStaffVideoTableSeeder::class);

        Schema::enableForeignKeyConstraints();
        $this->call(PermissionsTableSeeder::class);
    }
}
