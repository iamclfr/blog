<x-layout>
    <x-setting heading="Manage Posts">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody>
                @foreach($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-4 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            <a href="/posts/{{ $post->slug }}">
                                {{ $post->title }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Published
                        </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="font-medium text-white bg-blue-500 py-2 px-4 rounded-lg hover:bg-blue-600">Edit</a>
                        </td>
                        <td class="px-6 py-4 text-right">
{{--                            <a href="/admin/posts/{{ $post->id }}/edit" class="font-medium text-white bg-red-500 py-2 px-4 rounded-lg hover:bg-red-600">Delete</a>--}}
                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                @csrf
                                @method('DELETE')

                                <button class="font-medium text-white bg-red-500 py-2 px-4 rounded-lg hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>
