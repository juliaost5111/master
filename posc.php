<?php
{
		public function show()
		{
			return view('test', ['var1' => '1', 'var2' => '2']);
		}
	}

    showblade
    <x-layout>
	<x-slot:title>
		page title
	</x-slot>
	
	page content
</x-layout>
?>

