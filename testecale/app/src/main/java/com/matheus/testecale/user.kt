package com.matheus.testecale

import android.os.Bundle
import androidx.fragment.app.Fragment
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.Toast
import androidx.core.os.bundleOf
import androidx.navigation.fragment.findNavController
import com.google.android.gms.location.FusedLocationProviderClient
import com.matheus.testecale.databinding.FragmentSecondBinding
import com.matheus.testecale.databinding.FragmentUserBinding
import kotlin.String.Companion as String1

/**
 * A simple [Fragment] subclass as the second destination in the navigation.
 */
class user : Fragment() {

    private var _binding: FragmentUserBinding? = null

    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View? {

        _binding = FragmentUserBinding.inflate(inflater, container, false)
        return binding.root



    }



    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        binding.nome.text = arguments?.getString("nome")
    }




    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}