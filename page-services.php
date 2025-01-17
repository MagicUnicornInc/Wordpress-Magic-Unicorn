&lt;?php
          /**
          * Template Name: Services Page
          */
          get_header(); ?&gt;
          &lt;main class="page-content"&gt;
            &lt;div class="container"&gt;
              &lt;div class="services-grid"&gt;
                &lt;?php
                $services = [
                  [
                    'icon' =&gt; '&lt;i class="fa fa-robot"&gt;&lt;/i&gt;',
                    'title' =&gt; "AI Solutions",
                    'description' =&gt; "Intelligent systems that learn, adapt, and evolve to meet your needs",
                    'features' =&gt; [
                      "Custom AI Models",
                      "Natural Language Processing",
                      "Machine Learning Integration",
                      "Predictive Analytics"
                    ]
                  ],
                  [
                    'icon' =&gt; '&lt;i class="fa fa-cogs"&gt;&lt;/i&gt;',
                    'title' =&gt; "Automation",
                    'description' =&gt; "Streamline your workflows with our custom automation solutions",
                    'features' =&gt; [
                      "Process Automation",
                      "Workflow Optimization",
                      "Integration Services",
                      "Performance Monitoring"
                    ]
                  ],
                  [
                    'icon' =&gt; '&lt;i class="fa fa-code"&gt;&lt;/i&gt;',
                    'title' =&gt; "Custom Development",
                    'description' =&gt; "Tailored software solutions designed to solve your unique challenges",
                    'features' =&gt; [
                      "Web Applications",
                      "Mobile Development",
                      "API Integration",
                      "Cloud Solutions"
                    ]
                  ],
                  [
                    'icon' =&gt; '&lt;i class="fa fa-chart-line"&gt;&lt;/i&gt;',
                    'title' =&gt; "Data Analytics",
                    'description' =&gt; "Transform your data into actionable insights",
                    'features' =&gt; [
                      "Business Intelligence",
                      "Data Visualization",
                      "Performance Metrics",
                      "Custom Reporting"
                    ]
                  ],
                  [
                    'icon' =&gt; '&lt;i class="fa fa-palette"&gt;&lt;/i&gt;',
                    'title' =&gt; "Creative Tech",
                    'description' =&gt; "Innovative solutions that combine art and technology",
                    'features' =&gt; [
                      "Interactive Experiences",
                      "Digital Art Integration",
                      "Creative Coding",
                      "Experimental Tech"
                    ]
                  ],
                  [
                    'icon' =&gt; '&lt;i class="fa fa-magic"&gt;&lt;/i&gt;',
                    'title' =&gt; "Innovation Lab",
                    'description' =&gt; "Explore cutting-edge technologies and experimental solutions",
                    'features' =&gt; [
                      "Proof of Concepts",
                      "R&amp;D Projects",
                      "Technology Exploration",
                      "Innovation Workshops"
                    ]
                  ]
                ];
                foreach ($services as $service): ?&gt;
                  &lt;div class="service-card"&gt;
                    &lt;div class="service-icon"&gt;&lt;?php echo $service['icon']; ?&gt;&lt;/div&gt;
                    &lt;h3&gt;&lt;?php echo $service['title']; ?&gt;&lt;/h3&gt;
                    &lt;p&gt;&lt;?php echo $service['description']; ?&gt;&lt;/p&gt;
                    &lt;ul class="service-features"&gt;
                      &lt;?php foreach ($service['features'] as $feature): ?&gt;
                        &lt;li&gt;&lt;i class="fa fa-magic feature-icon"&gt;&lt;/i&gt; &lt;?php echo $feature; ?&gt;&lt;/li&gt;
                      &lt;?php endforeach; ?&gt;
                    &lt;/ul&gt;
                  &lt;/div&gt;
                &lt;?php endforeach; ?&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/main&gt;
          &lt;?php get_footer(); ?&gt;
