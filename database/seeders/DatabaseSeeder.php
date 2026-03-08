<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Techstack;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seeding dengan factory (opsional, bisa diaktifkan untuk testing atau pengembangan awal)
        // // Skills
        // Skill::factory(8)->create();

        // // Techstacks
        // $techstacks = Techstack::factory(8)->create();

        // // Education
        // Education::factory(2)->create();

        // // Certificates
        // Certificate::factory(4)->create();

        // // Experiences (2: 1 internship, 1 freelance)
        // $experiences = Experience::factory(2)->create();

        // // Projects — 3 featured, sisanya biasa
        // // Featured projects (standalone)
        // $featuredProjects = Project::factory(3)->featured()->create();

        // // Projects linked to experience
        // $experiences->each(function ($experience) use ($techstacks) {
        //     $projects = Project::factory(2)->create([
        //         'experience_id' => $experience->id,
        //     ]);

        //     // Attach random techstacks ke tiap project
        //     $projects->each(function ($project) use ($techstacks) {
        //         $project->techstacks()->attach(
        //             $techstacks->random(rand(2, 4))->pluck('id')
        //         );
        //     });
        // });

        // // Attach techstacks ke featured projects
        // $featuredProjects->each(function ($project) use ($techstacks) {
        //     $project->techstacks()->attach(
        //         $techstacks->random(rand(2, 4))->pluck('id')
        //     );
        // });

        // Seeding asli:
        $this->call([
            EducationExperienceSeeder::class,
            ProjectTechSeeder::class,
            CertificateSeeder::class,
            SkillSeeder::class,
        ]);
    }
}