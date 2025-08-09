<?php

namespace App\Helpers;

class BlogHelper
{
    public static function getPosts()
    {
return [
    [
        'title' => 'The Future of Healthcare Recruitment in the UK',
        'slug' => 'future-healthcare-recruitment-uk',
        'image' => 'images/homepage-1/blog/blog-img-01.jpg',
        'excerpt' => 'Healthcare recruitment in the UK is evolving quickly. With an ageing population, advancing medical technology, and a growing demand for skilled professionals, the need for effective recruitment strategies has never been greater.',
        'content' => '
            <p>Healthcare recruitment in the UK is undergoing a transformation driven by <strong>technology</strong>, government policy, and the increasing need for skilled professionals.</p>
            <p>The integration of <em>AI in screening candidates</em>, telemedicine roles, and international hiring trends are shaping a competitive and opportunity-filled job market for both employers and job seekers.</p>

            <p>One of the most significant changes is the shift toward <strong>digital-first recruitment</strong> processes. Platforms now allow recruiters to filter, interview, and even onboard staff entirely online, reducing time-to-hire and improving accessibility for candidates across the globe. Additionally, remote and hybrid healthcare roles are becoming more common, allowing flexibility for both employers and employees.</p>

            <p>Employers are also placing a higher value on <em>soft skills</em> such as communication, empathy, and adaptability. These skills complement the technical expertise required in healthcare, ensuring a well-rounded workforce capable of delivering high-quality patient care in fast-changing environments.</p>

            <ul>
                <li>Increased demand for nursing and midwifery professionals</li>
                <li>Growth in telemedicine and remote healthcare support roles</li>
                <li>Opportunities for international candidates to fill skills gaps</li>
                <li>Rising importance of continuous professional development (CPD)</li>
            </ul>

            <p>The UK government is also playing an active role, introducing policies and incentives aimed at attracting talent from both local and international pools. Immigration pathways for skilled healthcare workers have been streamlined, and partnerships with educational institutions are helping to ensure a steady pipeline of new professionals.</p>

            <p><strong>Looking ahead</strong>, the recruitment landscape will likely become even more competitive. Employers will need to focus on retention strategies, such as offering career development opportunities, flexible scheduling, and mental health support, to maintain a satisfied and motivated workforce. For job seekers, this is an exciting time to explore opportunities, upskill, and adapt to the evolving demands of the healthcare industry.</p>',
        'date' => '2025-08-01',
        'author' => 'Admin',
    ],
    [
        'title' => 'Why IT Skills Are in High Demand in 2025',
        'slug' => 'it-skills-demand-2025',
        'image' => 'images/homepage-1/blog/blog-img-01.jpg',
        'excerpt' => 'As AI, cloud computing, and cybersecurity challenges expand, IT professionals are becoming essential for every modern business. Employers are willing to invest heavily in attracting and retaining top talent in these fields.',
        'content' => '<p>In 2025, IT professionals are more in demand than ever, especially in areas such as <strong>artificial intelligence</strong>, cloud infrastructure, and cybersecurity.</p>
                      <p>Companies are investing in <u>upskilling their teams</u>, offering remote opportunities, and seeking global talent pools to remain competitive in an increasingly digital-first economy.</p>',
        'date' => '2025-08-05',
        'author' => 'Admin',
    ],
    [
        'title' => 'Construction Jobs That Will Dominate the Next Decade',
        'slug' => 'construction-jobs-next-decade',
        'image' => 'images/homepage-1/blog/blog-img-01.jpg',
        'excerpt' => 'With government investment in infrastructure, green buildings, and sustainable construction, skilled tradespeople are at the heart of the UK’s future growth. Opportunities span both traditional and emerging roles.',
        'content' => '<p>The UK construction industry is entering a <strong>golden era of growth</strong>, driven by infrastructure investment, housing projects, and green building initiatives.</p>
                      <p>Demand is surging for electricians, project managers, site supervisors, and sustainable design specialists, creating a wealth of opportunities for skilled workers and apprentices alike.</p>',
        'date' => '2025-08-08',
        'author' => 'Admin',
    ],
    [
        'title' => 'Top Tips for Landing Your Dream Job in the UK',
        'slug' => 'top-tips-dream-job-uk',
        'image' => 'images/homepage-1/blog/blog-img-01.jpg',
        'excerpt' => 'Job hunting in the UK requires a mix of preparation, networking, and industry knowledge. Understanding employer expectations is key to making your application stand out.',
        'content' => '<p>Securing your dream job in the UK involves more than just submitting applications. You need a strong CV tailored to the role, a <strong>professional online presence</strong>, and a strategic networking approach.</p>
                      <p>Researching companies, attending industry events, and preparing for competency-based interviews can significantly boost your chances of success.</p>',
        'date' => '2025-08-10',
        'author' => 'Admin',
    ],
];

    }

public static function getPostBySlug($slug)
{
    foreach (self::getPosts() as $post) {
        if ($post['slug'] === $slug) {
            return (object) $post; // Cast array to object
        }
    }
    return null;
}
}
