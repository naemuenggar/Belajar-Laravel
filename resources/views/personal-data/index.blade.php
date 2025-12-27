<x-app-layout>
    {{-- CSS khusus halaman ini --}}
    <style>
        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .profile-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.35);
            background-color: #020617;
            color: #e5e7eb;
        }
        .skill-badge {
            display: inline-block;
            background-color: #1e293b;
            color: #e5e7eb;
            padding: 0.375rem 0.75rem;
            border-radius: 999px;
            margin: 0.25rem;
            font-size: 0.875rem;
        }
        .section-title {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            color: #e5e7eb;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .timeline-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0.5rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 1rem;
            top: 1.5rem;
            width: 2px;
            height: calc(100% - 1rem);
            background: #1e293b;
        }
        .timeline-item:last-child::after {
            display: none;
        }
        .text-muted {
            color: #9ca3af !important;
        }
        .text-primary {
            color: #a855f7 !important;
        }
    </style>

    {{-- Judul di navbar --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Data Diri
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto px-4">
            {{-- CARD PROFIL --}}
            <div class="card profile-card">
                {{-- HEADER CARD --}}
                <div class="profile-header p-4">
                    <div class="grid grid-cols-1 md:grid-cols-[auto,1fr] gap-4 items-center">
                        <div class="text-center">
                            <div class="bg-white/10 rounded-full flex items-center justify-center"
                                 style="width: 100px; height: 100px;">
                                <span class="text-4xl text-white font-bold">
                                    GAR
                                </span>
                            </div>
                        </div>
                        <div>
                            <h1 class="mb-1 text-2xl font-semibold">{{ $personalData['name'] }}</h1>
                            <h4 class="mb-2 opacity-75">{{ $personalData['title'] }}</h4>
                            <p class="mb-0">{{ $personalData['summary'] }}</p>
                        </div>
                    </div>
                </div>

                {{-- BODY CARD --}}
                <div class="card-body p-6">
                    {{-- CONTACT INFO --}}
                    <div class="mb-8">
                        <h3 class="section-title">Contact Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            {{-- KIRI --}}
                            <div>
                                <ul class="list-unstyled space-y-2">
                                    <li>
                                        <i class="fas fa-envelope me-2"></i>
                                        <strong>Email:</strong> {{ $personalData['email'] }}
                                    </li>
                                    <li>
                                        <i class="fas fa-phone me-2"></i>
                                        <strong>Phone:</strong> {{ $personalData['phone'] }}
                                    </li>
                                    <li>
                                        <i class="fas fa-birthday-cake me-2"></i>
                                        <strong>Date of Birth:</strong> {{ $personalData['birth_date'] }}
                                    </li>
                                    <li>
                                        <i class="fas fa-flag me-2"></i>
                                        <strong>Nationality:</strong> {{ $personalData['nationality'] }}
                                    </li>
                                </ul>
                            </div>

                            {{-- KANAN: Address, LinkedIn, GitHub --}}
                            <div class="md:text-justify">
                                <ul class="list-unstyled space-y-2">
                                    <li>
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        <strong>Address:</strong> {{ $personalData['address'] }}
                                    </li>
                                    <li>
                                        <i class="fab fa-linkedin me-2"></i>
                                        <strong>LinkedIn:</strong> {{ $personalData['linkedin'] }}
                                    </li>
                                    <li>
                                        <i class="fab fa-github me-2"></i>
                                        <strong>GitHub:</strong> {{ $personalData['github'] }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- SKILLS --}}
                    <div class="mb-8">
                        <h3 class="section-title">Skills & Expertise</h3>
                        <div>
                            @foreach($personalData['skills'] as $skill)
                                <span class="skill-badge">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    {{-- EXPERIENCE --}}
                    <div class="mb-8">
                        <h3 class="section-title">Work Experience</h3>
                        @foreach($personalData['experience'] as $exp)
                            <div class="timeline-item">
                                <div>
                                    <h5 class="mb-0">{{ $exp['position'] }}</h5>
                                    <p class="text-muted mb-1">{{ $exp['company'] }}</p>
                                    <p class="text-primary mb-2">{{ $exp['period'] }}</p>
                                    <p class="mb-0">{{ $exp['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- EDUCATION --}}
                    <div>
                        <h3 class="section-title">Education</h3>
                        @foreach($personalData['education'] as $edu)
                            <div class="timeline-item">
                                <div>
                                    <h5 class="mb-0">{{ $edu['degree'] }}</h5>
                                    <p class="text-muted mb-1">{{ $edu['institution'] }}</p>
                                    <p class="text-primary mb-2">{{ $edu['period'] }}</p>
                                    <p class="mb-0">{{ $edu['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>{{-- /card-body --}}
            </div>{{-- /card --}}
        </div>
    </div>
</x-app-layout>