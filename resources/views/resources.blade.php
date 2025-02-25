<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>
@include('layouts.navbar')

@include('layouts.lang')

<body>
    <main style = "min-height: 80vh;">
        <div class="container pt-5">
            <h1>{{ __('messages.resources_title') }}</h1>

            <ul>
                <li>
                    <strong>{{ __('messages.resource1_title') }}</strong>
                    <a href="https://journals.sagepub.com/doi/10.1177/11297298241291248?url_ver=Z39.88-2003&rfr_id=ori:rid:crossref.org&rfr_dat=cr_pub%20%200pubmed" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource2_title') }}</strong>
                    <a href="https://pubmed.ncbi.nlm.nih.gov/34088239/" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource3_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/336140694_Heparin_flush_vs_normal_saline_flush_to_maintain_the_patency_of_central_venous_catheter_among_adult_patients_A_systematic_review_and_meta-analysis" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource4_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/336140694_Heparin_flush_vs_normal_saline_flush_to_maintain_the_patency_of_central_venous_catheter_among_adult_patients_A_systematic_review_and_meta-analysis" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource5_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/386346816_International_experts_consensus_on_optimal_central_vascular_access_device_selection_and_management_for_patients_with_cancer" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource6_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/382853350_A_GAVeCeLT_consensus_on_the_indication_insertion_and_management_of_central_venous_access_devices_in_the_critically_ill" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource7_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/381301765_The_pediatric_DAV-expert_algorithm_A_GAVeCeLTGAVePed_consensus_for_the_choice_of_the_most_appropriate_venous_access_device_in_children" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource8_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/381301765_The_pediatric_DAV-expert_algorithm_A_GAVeCeLTGAVePed_consensus_for_the_choice_of_the_most_appropriate_venous_access_device_in_children" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource9_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/360915185_The_SIP_protocol_update_Eight_strategies_incorporating_Rapid_Peripheral_Vein_Assessment_RaPeVA_to_minimize_complications_associated_with_peripherally_inserted_central_catheter_insertion" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
                <li>
                    <strong>{{ __('messages.resource10_title') }}</strong>
                    <a href="https://www.researchgate.net/publication/370842942_The_neonatal_DAV-expert_algorithm_a_GAVeCeLTGAVePed_consensus_for_the_choice_of_the_most_appropriate_venous_access_in_newborns" target="_blank">{{ __('messages.more_information') }}</a>
                </li>
            </ul>
        </div>
    </main>
    @include('layouts.footer')
</body>
</html>
