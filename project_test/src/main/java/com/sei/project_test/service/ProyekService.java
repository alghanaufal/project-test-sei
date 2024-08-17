package com.sei.project_test.service;

import com.sei.project_test.model.Proyek;
import com.sei.project_test.repository.ProyekRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class ProyekService {
    @Autowired
    private ProyekRepository proyekRepository;

    public Proyek saveProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public List<Proyek> getAllProyek() {
        return proyekRepository.findAll();
    }

    public Proyek updateProyek(Proyek proyek) {
        return proyekRepository.save(proyek);
    }

    public void deleteProyek(Integer id) {
        proyekRepository.deleteById(id);
    }
}
