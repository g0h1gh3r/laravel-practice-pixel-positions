<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$9000,000 USD"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
            <option>Contract</option>
            <option>Co-op</option>
            <option>Intern</option>
        </x-forms.select>

        <x-forms.input label="URl" name="url" placeholder="https://acme.com/jobs/ceo-wanted"></x-forms.input>

        <x-forms.checkbox label="Feature (Cost Extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="laracasts, video, education"></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
