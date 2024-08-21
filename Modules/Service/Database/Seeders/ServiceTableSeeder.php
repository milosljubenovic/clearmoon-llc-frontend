<?php

namespace Modules\Service\Database\Seeders;

use Carbon\Carbon;
use Modules\Service\Entities\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title'       => "Networking Solutions",
                'slug'        => "networking-solutions",
                'category_id' => 1,
                'description' => "We provide comprehensive network solutions, including wireless and wired network design, installation, and cloud integration. Our services ensure secure, high-performance networking with guest Wi-Fi access, bandwidth management, and QoS implementation. We also offer VPN provisioning, content filtering, and ongoing network monitoring and troubleshooting.
    <br />
    <strong>Wireless and Network Services:</strong>
    <ul>
        <li>Wireless network design and installation</li>
        <li>Wired network design and installation</li>
        <li>Cloud network design and installation</li>
        <li>Network security implementation and management</li>
        <li>Network performance monitoring</li>
        <li>Network troubleshooting</li>
        <li>Guest Wi-Fi access</li>
        <li>Inappropriate content filtering</li>
        <li>Bandwidth management</li>
        <li>Quality of Service (QoS) implementation and management</li>
        <li>VPN service provisioning and management</li>
    </ul>
    <br />
    <strong>Circuit Services:</strong>
    <ul>
        <li>Installation and maintenance of Fiber lines</li>
        <li>Microwave or other PT[m]P wireless systems</li>
        <li>High-speed circuits</li>
        <li>Managed circuit services</li>
        <li>Ensuring circuit diversity, load balancing, and optimization</li>
    </ul>
    <br />
    <strong>CBRS:</strong>
    <ul>
        <li>Spectrum analysis and band selection</li>
        <li>Network topology and coverage planning</li>
        <li>Interference mitigation and coordination</li>
        <li>Base station and antenna installation</li>
        <li>Coverage and performance testing</li>
        <li>Network monitoring and management</li>
        <li>Troubleshooting and issue resolution</li>
        <li>Security and compliance management</li>
    </ul>",
                'image'        => 'service-networking-solutions.jpg',
                'banner_image' => 'service-networking-solutions-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],
            [
                'title'       => "On-site Systems",
                'slug'        => "on-site-systems",
                'category_id' => 2,
                'description' => "Our On-site Systems services encompass a wide array of security solutions, including camera systems, security systems, access control, IoT integration, and analog emergency lines. We provide comprehensive design, installation, maintenance, and monitoring services to ensure your systems are secure, compliant, and efficiently managed.
    <br />
    <strong>Camera Systems:</strong>
    <ul>
        <li>Camera system design and installation</li>
        <li>Camera system maintenance and support</li>
        <li>Camera system monitoring for threats and incidents</li>
        <li>Camera system video analytics</li>
        <li>Camera system integration with other security systems</li>
        <li>Cloud-based camera systems</li>
        <li>Remote camera access</li>
        <li>Camera system recording and playback</li>
        <li>Camera system incident response</li>
    </ul>
    <br />
    <strong>Security Systems:</strong>
    <ul>
        <li>Security system design and installation</li>
        <li>Security system maintenance and support</li>
        <li>Security system monitoring</li>
        <li>Security system integration with other security systems</li>
        <li>Cloud-based security systems</li>
        <li>Mobile security system access</li>
        <li>Security system incident response</li>
    </ul>
    <br />
    <strong>Access Control:</strong>
    <ul>
        <li>Access control system design and installation</li>
        <li>Access control system maintenance and support</li>
        <li>Access control system monitoring</li>
        <li>Access control system integration with other security systems</li>
        <li>Cloud-based access control systems</li>
        <li>Mobile access control</li>
        <li>Access control system auditing</li>
        <li>Access control system incident response</li>
    </ul>
    <br />
    <strong>IoT (Internet of Things) Systems:</strong>
    <ul>
        <li>IoT system design and installation</li>
        <li>IoT system maintenance and support</li>
        <li>IoT system monitoring</li>
        <li>IoT system integration with other systems (security, building management, business intelligence)</li>
        <li>Cloud-based IoT systems</li>
        <li>Mobile IoT system access</li>
        <li>IoT system security</li>
        <li>IoT system data analytics</li>
    </ul>
    <br />
    <strong>Analog / POTS - Emergency and Elevator Lines:</strong>
    <ul>
        <li>Emergency and elevator line design and installation</li>
        <li>Emergency and elevator line maintenance and support, ensuring code and regulation compliance</li>
        <li>Emergency and elevator line monitoring</li>
        <li>Emergency and elevator line testing and inspection</li>
        <li>Emergency and elevator line repair and replacement</li>
        <li>Cloud-based emergency and elevator line monitoring</li>
        <li>Mobile emergency and elevator line access</li>
        <li>Emergency and elevator line compliance</li>
        <li>Emergency and elevator line staff training</li>
    </ul>
    <br />
    <strong>Phone Systems:</strong>
    <ul>
        <li>Phone system design and installation</li>
        <li>Phone system maintenance and support</li>
        <li>Phone system monitoring</li>
        <li>Phone system troubleshooting</li>
        <li>Phone system user training</li>
        <li>Cloud-based phone systems</li>
        <li>Mobile phone integration</li>
        <li>Auto attendant services</li>
        <li>Interactive Voice Response (IVR) systems</li>
        <li>Call recording and reporting solutions</li>
    </ul>",
                'image'        => 'service-on-site-systems.jpg',
                'banner_image' => 'service-on-site-systems-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],
            [
                'title'       => "Management Services",
                'slug'        => "management-services",
                'category_id' => 3,
                'description' => "Our Management Services provide comprehensive support in leadership, IT training, HR services, and security policy development. We help organizations develop strong leaders, enhance team collaboration, manage employee performance, and ensure compliance with security policies.
    <br />
    <strong>Management as a Service:</strong>
    <ul>
        <li>Leadership development and coaching</li>
        <li>Team building and collaboration</li>
        <li>Performance management</li>
        <li>Employee engagement and retention</li>
    </ul>
    <br />
    <strong>IT Training and Development:</strong>
    <ul>
        <li>Technical skills training</li>
        <li>Cybersecurity awareness training</li>
        <li>ITIL and other framework training</li>
        <li>Professional development planning</li>
    </ul>
    <br />
    <strong>HR Services:</strong>
    <ul>
        <li>Recruitment and onboarding</li>
        <li>Payroll and benefits administration</li>
        <li>Employee relations</li>
        <li>HR policy development and compliance</li>
    </ul>
    <br />
    <strong>Security Policy and Initiatives:</strong>
    <ul>
        <li>Security policy development and implementation</li>
        <li>Risk assessment and management</li>
        <li>Security awareness training</li>
        <li>Incident response planning and execution</li>
    </ul>",
                'image'        => 'service-management-services.jpg',
                'banner_image' => 'service-management-services-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],
            [
                'title'       => "Software as a Service",
                'slug'        => "software-as-a-service",
                'category_id' => 4,
                'description' => "Our Software as a Service (SaaS) offerings encompass a wide range of services, from DevOps and programming to app creation and UI/UX design. We provide comprehensive solutions for cloud infrastructure, automation, custom software development, and more. Our expertise ensures that your software is efficient, scalable, and tailored to your needs.
    <br />
    <strong>DevOps as a Service:</strong>
    <ul>
        <li>Continuous Integration and Continuous Delivery (CI/CD)</li>
        <li>Pipeline design and implementation</li>
        <li>Build, test, and deployment automation</li>
        <li>Infrastructure as Code (IaC)</li>
        <li>Cloud infrastructure provisioning and management</li>
        <li>Configuration management</li>
        <li>Containerization and orchestration (e.g., Kubernetes, Docker Swarm)</li>
    </ul>
    <br />
    <strong>Monitoring and Logging:</strong>
    <ul>
        <li>Application performance monitoring (APM)</li>
        <li>Log aggregation and analysis</li>
        <li>Alerting and incident response</li>
    </ul>
    <br />
    <strong>Programming:</strong>
    <ul>
        <li>Custom Software Development</li>
        <li>API Development and Integration</li>
        <li>Database Development and Administration</li>
    </ul>
    <br />
    <strong>App Creation:</strong>
    <ul>
        <li>Mobile App Development</li>
        <li>Web App Development</li>
        <li>Desktop App Development</li>
    </ul>
    <br />
    <strong>UI/UX:</strong>
    <ul>
        <li>User Research and Analysis</li>
        <li>Interaction Design</li>
        <li>Visual Design</li>
        <li>Usability Testing and Optimization</li>
    </ul>
    <br />
    <strong>GameDev:</strong>
    <ul>
        <li>Game Design and Development</li>
        <li>Game Engine Development</li>
        <li>Game Porting and Optimization</li>
    </ul>
    <br />
    <strong>Specialized Systems:</strong>
    <ul>
        <li>Property Management Systems (PMS)</li>
    </ul>",
                'image'        => 'service-software-as-a-service.jpg',
                'banner_image' => 'service-software-as-a-service-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],
            [
                'title'       => "Computer Asset Management",
                'slug'        => "computer-asset-management",
                'category_id' => 6,
                'description' => "Our Computer Asset Management services ensure that your organization's endpoints and business center PCs are efficiently managed, secure, and up-to-date. We offer comprehensive solutions for device provisioning, software distribution, remote management, and data backup, catering to both enterprise and business center needs.
    <br />
    <strong>Endpoints:</strong>
    <ul>
        <li>Endpoint Management</li>
        <li>Device provisioning and deployment</li>
        <li>Inventory management</li>
        <li>Software distribution and updates</li>
        <li>Remote desktop management</li>
        <li>Patch management</li>
        <li>Operating system imaging and deployment</li>
    </ul>
    <br />
    <strong>Mobile Device Management (MDM):</strong>
    <ul>
        <li>MDM policy configuration and enforcement</li>
        <li>Mobile device security</li>
        <li>Mobile application management</li>
        <li>Mobile device tracking and reporting</li>
    </ul>
    <br />
    <strong>Business Center PCs:</strong>
    <ul>
        <li>Computer setup and configuration</li>
        <li>Computer maintenance and support</li>
        <li>Computer troubleshooting</li>
        <li>Computer training</li>
        <li>Computer security</li>
        <li>Cloud-based computing access</li>
        <li>Remote printing</li>
        <li>Document scanning and digitization</li>
        <li>Data backup and recovery</li>
        <li>Computer rental and leasing</li>
    </ul>
    <br />
    <strong>Enterprise:</strong>
    <ul>
        <li>Backup and Disaster Recovery</li>
        <li>Data backup and recovery planning</li>
        <li>On-site and off-site backups</li>
        <li>Cloud-based backups</li>
        <li>Backup testing and verification</li>
        <li>Disaster recovery planning and testing</li>
    </ul>
    <br />
    <strong>Hardware Maintenance:</strong>
    <ul>
        <li>Hardware procurement and installation</li>
        <li>Hardware repair and replacement</li>
        <li>Hardware lifecycle management</li>
        <li>Hardware warranty and support management</li>
        <li>PMS data security and compliance</li>
    </ul>",
                'image'        => 'service-computer-asset-management.jpg',
                'banner_image' => 'service-computer-asset-management-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ],
            [
                'title'       => "Scalable and Secure IT Programs",
                'slug'        => "scalable-secure-it-programs",
                'category_id' => 7,
                'description' => "Our Scalable and Secure IT Programs provide a robust framework for decision-making, environment management, technical configuration, budgeting, and training. These programs are designed to minimize risk and enhance efficiency, whether you're starting from scratch or addressing existing technical debt.
    <br />
    <strong>Policy Development:</strong>
    <ul>
        <li>Define company standards for working and making decisions</li>
    </ul>
    <br />
    <strong>Process Standardization:</strong>
    <ul>
        <li>Assign process responsibilities</li>
        <li>Create checklists</li>
        <li>Define pathways</li>
    </ul>
    <br />
    <strong>Audit & Monitor:</strong>
    <ul>
        <li>Log events</li>
        <li>Create alerting thresholds</li>
        <li>Periodically audit processes and systems</li>
    </ul>
    <br />
    <strong>Enact Controls:</strong>
    <ul>
        <li>Configure and enforce administrative, technical, and physical controls</li>
    </ul>
    <br />
    <strong>Applied Risk Modeling:</strong>
    <ul>
        <li>Analyze risk considering industry, size, constraints, goals, and resources</li>
        <li>Account for stage and maturity level in risk assessments</li>
    </ul>
    <br />
    <strong>Contextual Examples:</strong>
    <ul>
        <li>Compare current practices with best/recommended practices</li>
        <li>Utilize NIST, SOC2T2, ITIL, and ISO 127001 frameworks and methodologies</li>
    </ul>
    <br />
    <strong>Gap Analysis:</strong>
    <ul>
        <li>Identify opportunities for improvement based on current vs. recommended practices</li>
    </ul>
    <br />
    <strong>Remediation:</strong>
    <ul>
        <li>Prioritize improvements based on risk assessment principles</li>
        <li>Develop process improvements aligned with company goals and initiatives</li>
    </ul>",
                'image'        => 'service-scalable-secure-it-programs.jpg',
                'banner_image' => 'service-scalable-secure-it-programs-banner.jpg',
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now()
            ]





        ];

        Service::insert($services);
    }
}
