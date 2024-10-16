# New Service Request

A new service request has been submitted:

**Name:** {{ $serviceRequest->name }}
**Email:** {{ $serviceRequest->email }}
**Phone:** {{ $serviceRequest->phone }}
**Event Type:** {{ $serviceRequest->event_type }}
**Start Date:** {{ $serviceRequest->start_date->format('Y-m-d') }}
**End Date:** {{ $serviceRequest->end_date->format('Y-m-d') }}
**Duration:** {{ $serviceRequest->duration }} hours
**Number of People:** {{ $serviceRequest->people_count }}
**Budget:** ${{ number_format($serviceRequest->budget, 2) }}

**Additional Services:**
@foreach(json_decode($serviceRequest->services, true) as $service => $details)
- {{ ucfirst(str_replace('_', ' ', $service)) }}: {{ $details }}
@endforeach

**Message:**
{{ $serviceRequest->message ?? 'No additional message provided.' }}

Thanks,<br>
{{ config('app.name') }}